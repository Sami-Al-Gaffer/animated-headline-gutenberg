<?php
/**
 * Plugin Name: sami Gutenberg
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

if(function_exists('the_gutenbert_project')){
	if(!function_exists('jmogutenberg_block')){

		function jmogutenberg_block(){
			//Register the block building script

			wp_register_script( 
				'jmogutenberg-myfirstblock-editor',  //name of the script
				 plugins_url('blocks/myfirstblock/editor-script.js', __FILE__ ), //Url of scripts
				 array( 'wp-blocks','wp-element' )  //required dependencies for gutenberg
			 );

				//Register global block css

			wp_register_style( 
				'jmogutenberg-myfirstblock',  //name of the script
				 plugins_url('/blocks/myfirstblock/style.css',__FILE__), //Url of scripts
				  array( 'wp-edit-blocks' ),  //required dependencies for gutenberg
				  filemtime(plugin_dir_path(__FILE__) . '/blocks/myfirstblock/style.css')
			 );

			// //register editor only css

			wp_register_style( 
				'jmogutenberg-myfirstblock-editor',  //name of the style
				 plugins_url('/blocks/myfirstblock/editor-style.css',__FILE__), //Url of scripts
				  array( 'wp-edit-blocks' ),  //required dependencies for gutenberg
				  filemtime(plugin_dir_path(__FILE__) . '/blocks/myfirstblock/editor-style.css')
			 );

				//register block type
			Register_block_type('jmogutenberg/myfirstblock',array(
				'editor-script' 		=> 'jmogutenberg-myfirstblock-editor',
				'editor-style'			=> 'jmogutenberg-myfirstblock-editor',
				'style'					=> 'jmogutenberg-myfirstblock',
			));
		}

		add_action( 'init', 'jmogutenberg_block' );
	}

}