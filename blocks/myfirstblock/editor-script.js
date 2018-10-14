wp.blocks.registerBlockType('jmogutenberg/myfirstblock',{
	title : 'My First Block',
	icon : 'dashicons-welcome-add-page',
	category: 'common',
	attributes:{
		content:{
			type:'array',
			source: 'children',
			selector:'p',
		},
	},

	edit: function(props){
		return wp.element.createElement(wp.blocks.RichText,{
			tagName: 'p',
			className: props.className,
			value: props.attributes.content,
			onchange: function(newContent){
				props.setAttributes({content: newContent});
			}
		});
	},

	save: function(props){
		return wp.element.createElement('p',{
			className: props.className,
			//value: props.attributes.content
		},props.attributes.content);
		}
		
	
});


// var el = wp.element.createElement,
//     registerBlockType = wp.blocks.registerBlockType,
//     RichText = wp.editor.RichText;

//    registerBlockType( 'jmogutenberg/myfirstblock', {
//     title: 'My First Block',

//     icon: 'welcome-add-page',

//     category: 'layout',

//     attributes: {
//         content: {
//             type:'array',
//  			source: 'children',
// 			selector:'p',
//         }
//     },


// 	edit: function( props ) {
//         var content = props.attributes.content;

//         function onChangeContent( newContent ) {
//             props.setAttributes( { content: newContent } );
//         }

//         return el(
//             RichText,
//             {
//                 tagName: 'p',
//                 className: props.className,
//                 onChange: onChangeContent,
//                 value: content,
//             }
//         );
//     },

//         save: function( props ) {
//         var content = props.attributes.content;

//         return el( RichText.Content, {
//             tagName: 'p',
//             className: props.className,
//             value: content
//         } );
//     },
		
	
// });