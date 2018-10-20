<?php
/**
 * Plugin Name: samigutenberg
 * Plugin URI: https://github.com/HardeepAsrani/hello-gutenberg/
 * Description: Gutenberg examples.
 * Author: Hardeep Asrani
 * Author URI: http://www.hardeepasrani.com
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package hello-gutenberg
 */


defined('ABSPATH') || exit;

//echo plugins_url('blocks/myfirstblock/editor-script.js',__FILE__);


//Check The Gutenberg

// if(function_exists('the_gutenbert_project')){
// 	if(!function_exists('jmogutenberg_block')){

		function samiGutenberg_block(){
			//Register the block building script

			wp_register_script(
			    'samigutenberg-myfirstblock-editor',
			    plugins_url('blocks/myfirstblock/editor-script.js', __FILE__ ),
			    array( 'wp-blocks', 'wp-element' )
			);


			// wp_register_script( 
			// 	'jmogutenberg-myfirstblock-editor',  //name of the script
			// 	 plugins_url('/blocks/myfirstblock/editor-script.js',__FILE__), //Url of scripts
			// 	 array( 'wp-blocks','wp-element' )  //required dependencies for gutenberg
			//  );

				//Register global block css

			wp_register_style( 
				'samigutenberg-myfirstblock',  //name of the script
				 plugins_url('blocks/myfirstblock/style.css',__FILE__), //Url of scripts
				  array( 'wp-edit-blocks' ),  //required dependencies for gutenberg
				  filemtime( plugin_dir_path(__FILE__) . 'blocks/myfirstblock/style.css')
			 );

			// //register editor only css

			wp_register_style( 
				'samigutenberg-myfirstblock-editor',  //name of the style
				 plugins_url('blocks/myfirstblock/editor-style.css',__FILE__), //Url of scripts
				  array( 'wp-edit-blocks' ),  //required dependencies for gutenberg
				  filemtime(plugin_dir_path(__FILE__) . 'blocks/myfirstblock/editor-style.css')
			 );

				//register block type
			register_block_type('samigutenberg/myfirstblock', array(
				'editor_script' => 'samigutenberg-myfirstblock-editor',
				'editor_style'	=> 'samigutenberg-myfirstblock-editor',
				'style'			=> 'samigutenberg-myfirstblock',
			));
		}
		//add_action( 'enqueue_block_assets', 'jmogutenberg_block' );

		add_action( 'init', 'samiGutenberg_block' );
// 	}

// }