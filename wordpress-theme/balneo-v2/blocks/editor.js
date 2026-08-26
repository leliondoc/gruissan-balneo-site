( function ( blocks, blockEditor, components, element, i18n ) {
	'use strict';

	var createElement = element.createElement;
	var Fragment = element.Fragment;
	var __ = i18n.__;
	var useBlockProps = blockEditor.useBlockProps;
	var InnerBlocks = blockEditor.InnerBlocks;
	var RichText = blockEditor.RichText;
	var MediaUpload = blockEditor.MediaUpload;
	var MediaUploadCheck = blockEditor.MediaUploadCheck;
	var Button = components.Button;
	var TextControl = components.TextControl;

	blocks.registerBlockType( 'balneo/container', {
		title: __( 'Conteneur Balnéo', 'balneo-v2' ),
		category: 'design',
		icon: 'layout',
		attributes: {
			tagName: { type: 'string', default: 'div' },
			htmlAttributes: { type: 'object', default: {} }
		},
		edit: function ( props ) {
			var sourceClass = props.attributes.htmlAttributes.class || '';
			var label = props.attributes.tagName + ( sourceClass ? ' · .' + sourceClass.split( ' ' ).join( '.' ) : '' );
			var blockProps = useBlockProps( {
				className: 'balneo-editor-container',
				'data-balneo-element': label
			} );

			return createElement(
				'div',
				blockProps,
				createElement( 'span', { className: 'balneo-editor-container__label' }, label ),
				createElement( InnerBlocks )
			);
		},
		save: function () {
			return createElement( InnerBlocks.Content );
		}
	} );

	blocks.registerBlockType( 'balneo/rich-text', {
		title: __( 'Texte Balnéo', 'balneo-v2' ),
		category: 'text',
		icon: 'editor-textcolor',
		attributes: {
			tagName: { type: 'string', default: 'span' },
			content: { type: 'string', default: '' },
			htmlAttributes: { type: 'object', default: {} }
		},
		edit: function ( props ) {
			var blockProps = useBlockProps( { className: 'balneo-editor-rich-text' } );
			return createElement(
				'div',
				blockProps,
				createElement( 'small', { className: 'balneo-editor-rich-text__label' }, props.attributes.tagName ),
				createElement( RichText, {
					tagName: 'div',
					value: props.attributes.content,
					onChange: function ( content ) { props.setAttributes( { content: content } ); },
					placeholder: __( 'Saisissez le texte…', 'balneo-v2' )
				} )
			);
		},
		save: function () { return null; }
	} );

	blocks.registerBlockType( 'balneo/image', {
		title: __( 'Image Balnéo', 'balneo-v2' ),
		category: 'media',
		icon: 'format-image',
		attributes: {
			src: { type: 'string', default: '' },
			alt: { type: 'string', default: '' },
			htmlAttributes: { type: 'object', default: {} }
		},
		edit: function ( props ) {
			var blockProps = useBlockProps( { className: 'balneo-editor-image' } );
			return createElement(
				'div',
				blockProps,
				props.attributes.src ? createElement( 'img', { src: props.attributes.src, alt: props.attributes.alt } ) : null,
				createElement(
					MediaUploadCheck,
					null,
					createElement( MediaUpload, {
						onSelect: function ( media ) {
							var htmlAttributes = Object.assign( {}, props.attributes.htmlAttributes, {
								src: media.url,
								alt: media.alt || ''
							} );
							props.setAttributes( { src: media.url, alt: media.alt || '', htmlAttributes: htmlAttributes } );
						},
						allowedTypes: [ 'image' ],
						render: function ( upload ) {
							return createElement( Button, { variant: 'secondary', onClick: upload.open }, props.attributes.src ? __( 'Remplacer l’image', 'balneo-v2' ) : __( 'Choisir une image', 'balneo-v2' ) );
						}
					} )
				),
				createElement( TextControl, {
					label: __( 'Texte alternatif', 'balneo-v2' ),
					value: props.attributes.alt,
					onChange: function ( alt ) {
						var htmlAttributes = Object.assign( {}, props.attributes.htmlAttributes, { alt: alt } );
						props.setAttributes( { alt: alt, htmlAttributes: htmlAttributes } );
					}
				} )
			);
		},
		save: function () { return null; }
	} );
} )( window.wp.blocks, window.wp.blockEditor, window.wp.components, window.wp.element, window.wp.i18n );
