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

  const { getBlockType, registerBlockType } = require('@wordpress/blocks');
  const dynamicBlocks = [
    {
      name: 'balneo/container',
      title: 'Ancien conteneur Balnéo',
      category: 'design',
      attributes: {
        tagName: { type: 'string', default: 'div' },
        htmlAttributes: { type: 'object', default: {} },
      },
    },
    {
      name: 'balneo/rich-text',
      title: 'Texte Balnéo',
      category: 'text',
      attributes: {
        tagName: { type: 'string', default: 'span' },
        content: { type: 'string', default: '' },
        htmlAttributes: { type: 'object', default: {} },
      },
    },
    {
      name: 'balneo/image',
      title: 'Image Balnéo',
      category: 'media',
      attributes: {
        src: { type: 'string', default: '' },
        alt: { type: 'string', default: '' },
        htmlAttributes: { type: 'object', default: {} },
      },
    },
  ];

  dynamicBlocks.forEach((settings) => {
    if (!getBlockType(settings.name)) {
      registerBlockType(settings.name, {
        apiVersion: 3,
        ...settings,
        save: () => null,
      });
    }
  });

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

const styleClassMap = new Map([
  ['text-align:left;margin-bottom:var(--space-md)', ['balneo-align-left', 'balneo-space-bottom-md']],
  ['margin-top:var(--space-md)', ['balneo-space-top-md']],
  ['text-align:center', ['balneo-align-center']],
  ['margin:var(--space-lg)0', ['balneo-space-y-lg']],
]);

const groupLabelMap = [
  ['page-hero__media', 'Image de couverture'],
  ['page-hero__content', 'Contenu de la bannière'],
  ['page-hero', 'Bannière de page'],
  ['hero__media', 'Image d’accueil'],
  ['hero__content', 'Introduction de l’accueil'],
  ['hero-seals', 'Pastilles d’information'],
  ['quick-access', 'Accès rapides'],
  ['content-block', 'Contenu de la page'],
  ['info-box', 'Encart d’information'],
  ['link-grid', 'Grille de liens'],
  ['link-card', 'Carte liée'],
  ['experience-grid', 'Grille des expériences'],
  ['experience-card', 'Carte expérience'],
  ['seasonal-section', 'Sélection saisonnière'],
  ['seasonal-slide', 'Carte saisonnière'],
  ['news-grid', 'Grille des actualités'],
  ['news-card', 'Carte actualité'],
  ['contact-grid', 'Bloc contact'],
  ['two-col', 'Deux colonnes'],
  ['faq-list', 'Questions fréquentes'],
  ['section-heading', 'En-tête de section'],
  ['section__header', 'En-tête de section'],
  ['btn-group', 'Boutons'],
];

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

function legacyConvertElement(element) {
  const tagName = element.tagName.toLowerCase();

  if ((tagName === 'p' || /^h[1-6]$/.test(tagName)) && element.hasAttribute('style')) {
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

  if (rawTags.has(tagName)) return blockComment('html', {}, element.outerHTML);

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
    .map(legacyConvertNode)
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

function legacyConvertNode(node) {
  if (node.nodeType === node.TEXT_NODE) {
    const text = node.textContent.trim();
    if (!text) return '';
    if (/^\[balneo_[a-z0-9_]+\]$/.test(text)) return blockComment('shortcode', {}, text);
    return blockComment('balneo/rich-text', { tagName: 'span', content: text }, '', true);
  }

  if (node.nodeType !== node.ELEMENT_NODE) return '';
  return legacyConvertElement(node);
}

function htmlToLegacyBalneoGutenberg(html) {
  bootstrapWordPressBlocks();
  const template = document.createElement('template');
  template.innerHTML = html.trim();

  return Array.from(template.content.childNodes)
    .map(legacyConvertNode)
    .filter(Boolean)
    .join('\n\n');
}

function normalizeInlineStyle(style) {
  return String(style || '')
    .replace(/\s+/g, '')
    .replace(/;+$/, '');
}

function groupLabel(tagName, className) {
  const classes = new Set(String(className || '').split(/\s+/).filter(Boolean));
  const match = groupLabelMap.find(([classToken]) => classes.has(classToken));
  if (match) return match[1];
  if (tagName === 'main') return 'Contenu de la page';
  if (tagName === 'section') return 'Section';
  if (tagName === 'article') return 'Carte';
  if (tagName === 'a') return 'Lien';
  if (tagName === 'nav') return 'Navigation';
  return '';
}

function coreGroupAttributes(element) {
  const htmlAttributes = blockAttributes(element);
  const tagName = element.tagName.toLowerCase();
  const classes = String(htmlAttributes.class || '').split(/\s+/).filter(Boolean);
  const styleClasses = styleClassMap.get(normalizeInlineStyle(htmlAttributes.style)) || [];
  const className = Array.from(new Set([...classes, ...styleClasses])).join(' ');
  const metadata = {};
  const label = groupLabel(tagName, className);
  const extraAttributes = {};

  Object.entries(htmlAttributes).forEach(([name, value]) => {
    if (!['class', 'id', 'style'].includes(name)) extraAttributes[name] = value;
  });

  if (label) metadata.name = label;
  if (Object.keys(extraAttributes).length) metadata.balneoAttributes = extraAttributes;

  const attributes = { layout: { type: 'default' } };
  if (tagName !== 'div') attributes.tagName = tagName;
  if (htmlAttributes.id) attributes.anchor = htmlAttributes.id;
  if (className) attributes.className = className;
  if (Object.keys(metadata).length) attributes.metadata = metadata;
  return attributes;
}

function nativeBlocks(element) {
  const { rawHandler } = require('@wordpress/blocks');
  return rawHandler({ HTML: element.outerHTML });
}

function convertElementToBlocks(element) {
  const { createBlock } = require('@wordpress/blocks');
  const tagName = element.tagName.toLowerCase();

  if (tagName === 'details') {
    const summary = Array.from(element.children).find((child) => child.tagName.toLowerCase() === 'summary');
    const innerBlocks = Array.from(element.childNodes)
      .filter((node) => node !== summary)
      .flatMap(convertNodeToBlocks);
    return [createBlock('core/details', { summary: summary ? summary.innerHTML : '' }, innerBlocks)];
  }

  if ((tagName === 'p' || /^h[1-6]$/.test(tagName)) && element.hasAttribute('style')) {
    return [createBlock('balneo/rich-text', {
      tagName,
      content: element.innerHTML,
      htmlAttributes: blockAttributes(element),
    })];
  }

  if (nativeTags.has(tagName)) return nativeBlocks(element);

  if (tagName === 'img') {
    return [createBlock('balneo/image', {
      src: element.getAttribute('src') || '',
      alt: element.getAttribute('alt') || '',
      htmlAttributes: blockAttributes(element),
    })];
  }

  if (rawTags.has(tagName)) return [createBlock('core/html', { content: element.outerHTML })];

  if (inlineTags.has(tagName) && hasOnlyInlineChildren(element)) {
    return [createBlock('balneo/rich-text', {
      tagName,
      content: element.innerHTML,
      htmlAttributes: blockAttributes(element),
    })];
  }

  const innerBlocks = Array.from(element.childNodes).flatMap(convertNodeToBlocks);
  return [createBlock('core/group', coreGroupAttributes(element), innerBlocks)];
}

function convertNodeToBlocks(node) {
  const { createBlock } = require('@wordpress/blocks');
  if (node.nodeType === node.TEXT_NODE) {
    const text = node.textContent.trim();
    if (!text) return [];
    if (/^\[balneo_[a-z0-9_]+\]$/.test(text)) return [createBlock('core/shortcode', { text })];
    return [createBlock('balneo/rich-text', { tagName: 'span', content: text })];
  }

  if (node.nodeType !== node.ELEMENT_NODE) return [];
  return convertElementToBlocks(node);
}

function htmlToEditableGutenberg(html) {
  bootstrapWordPressBlocks();
  const { serialize } = require('@wordpress/blocks');
  const template = document.createElement('template');
  template.innerHTML = html.trim();
  const blocks = Array.from(template.content.childNodes).flatMap(convertNodeToBlocks);
  return serialize(blocks);
}

module.exports = {
  htmlToGutenbergBlocks,
  htmlToEditableGutenberg,
  htmlToLegacyBalneoGutenberg,
};
