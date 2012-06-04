<?php
/*
Plugin Name: Easy GitHub Gist Shortcodes
Plugin URI: http://www.remicorson.com/easy-github-gist-shortcodes
Description: Insert easily GitHub Gist withinh shortcodes this way [gist id="xxxxxx"]
Version: 1.0
Author: Remi Corson
Author URI: http://www.remicorson.com/
*/

/*
 * USAGE:
 * Simply insert shortcodes [gist id="xxxxxx"] where "xxxxxx" is the Gist ID.
 * You can place these shortcodes in pages, posts or any custom content.
 */
 
// Main Function
function eggs_shortcode($atts, $content = null) {

	extract(shortcode_atts(array(
		'id' => ''
	), $atts));

	$output =  '<script src="http://gist.github.com/'.trim($id).'.js"></script>';
	
	if($content != null){
		$output = $output.'<noscript><code class="gist"><pre>'.$content.'</pre></code></noscript>';
	}
	
	return $output;
	
}

// Create Shortcode
add_shortcode('gist', 'eggs_shortcode');

?>