const { JSDOM, VirtualConsole } = require('jsdom');

let bootstrapped = false;

function bootstrapWordPressBlocks() {
  if (bootstrapped) return;

  const virtualConsole = new VirtualConsole();
  const dom = new JSDOM('<!doctype html><html><body></body></html>', {
    virtualConsole,
  });

  global.window = dom.window;
  global.document = dom.window.document;
  Object.defineProperty(global, 'navigator', {
    value: dom.window.navigator,
    configurable: true,
  });

  [
    'Blob',
    'CustomEvent',
    'DOMParser',
    'Element',
    'Event',
    'File',
    'HTMLElement',
    'MutationObserver',
    'Node',
  ].forEach((name) => {
    global[name] = dom.window[name];
  });

  require('@wordpress/block-library').registerCoreBlocks();
  bootstrapped = true;
}

function htmlToGutenbergBlocks(html) {
  bootstrapWordPressBlocks();

  const { rawHandler, serialize } = require('@wordpress/blocks');
  const blocks = rawHandler({ HTML: html.trim() });

  return {
    blocks,
    content: serialize(blocks),
  };
}

const nativeTags = new Set([
  'blockquote',
  'h1',
  'h2',
  'h3',
  'h4',
  'h5',
  'h6',
  'ol',
  'p',
  'pre',
  'table',
  'ul',
]);

const rawTags = new Set([
  'audio',
  'canvas',
  'embed',
  'hr',
  'iframe',
  'input',
  'object',
  'script',
  'source',
  'style',
  'svg',
  'textarea',
  'track',
  'video',
]);

const inlineTags = new Set([
  'a',
  'abbr',
  'b',
  'br',
  'button',
  'cite',
  'code',
  'del',
  'em',
  'i',
  'ins',
  'label',
  'mark',
  'small',
  'span',
  'strong',
  'sub',
  'sup',
  'time',
]);

function blockAttributes(element) {
  return Array.from(element.attributes).reduce((attributes, attribute) => {
    attributes[attribute.name] = attribute.value;
    return attributes;
  }, {});
}

function blockComment(name, attributes, content = '', selfClosing = false) {
  const json = Object.keys(attributes).length
    ? ` ${JSON.stringify(attributes).replace(/--/g, '\\u002d\\u002d')}`
    : '';

  if (selfClosing) return `<!-- wp:${name}${json} /-->`;
  return `<!-- wp:${name}${json} -->\n${content}\n<!-- /wp:${name} -->`;
}

function hasOnlyInlineChildren(element) {
  return Array.from(element.children).every((child) => inlineTags.has(child.tagName.toLowerCase()));
}

function nativeBlock(element) {
  const { rawHandler, serialize } = require('@wordpress/blocks');
  return serialize(rawHandler({ HTML: element.outerHTML }));
}

function convertElement(element) {
  const tagName = element.tagName.toLowerCase();

  if ( ( tagName === 'p' || /^h[1-6]$/.test(tagName) ) && element.hasAttribute('style') ) {
    return blockComment(
      'balneo/rich-text',
      {
        tagName,
        content: element.innerHTML,
        htmlAttributes: blockAttributes(element),
      },
      '',
      true,
    );
  }

  if (nativeTags.has(tagName)) return nativeBlock(element);

  if (tagName === 'img') {
    return blockComment(
      'balneo/image',
      {
        src: element.getAttribute('src') || '',
        alt: element.getAttribute('alt') || '',
        htmlAttributes: blockAttributes(element),
      },
      '',
      true,
    );
  }

  if (rawTags.has(tagName)) {
    return blockComment('html', {}, element.outerHTML);
  }

  if (hasOnlyInlineChildren(element)) {
    return blockComment(
      'balneo/rich-text',
      {
        tagName,
        content: element.innerHTML,
        htmlAttributes: blockAttributes(element),
      },
      '',
      true,
    );
  }

  const innerContent = Array.from(element.childNodes)
    .map(convertNode)
    .filter(Boolean)
    .join('\n\n');

  return blockComment(
    'balneo/container',
    {
      tagName,
      htmlAttributes: blockAttributes(element),
    },
    innerContent,
  );
}

function convertNode(node) {
  if (node.nodeType === node.TEXT_NODE) {
    const text = node.textContent.trim();
    if (!text) return '';
    if (/^\[balneo_[a-z0-9_]+\]$/.test(text)) {
      return blockComment('shortcode', {}, text);
    }
    return blockComment('balneo/rich-text', { tagName: 'span', content: text }, '', true);
  }

  if (node.nodeType !== node.ELEMENT_NODE) return '';
  return convertElement(node);
}

function htmlToEditableGutenberg(html) {
  bootstrapWordPressBlocks();
  const template = document.createElement('template');
  template.innerHTML = html.trim();

  return Array.from(template.content.childNodes)
    .map(convertNode)
    .filter(Boolean)
    .join('\n\n');
}

module.exports = {
  htmlToGutenbergBlocks,
  htmlToEditableGutenberg,
};
