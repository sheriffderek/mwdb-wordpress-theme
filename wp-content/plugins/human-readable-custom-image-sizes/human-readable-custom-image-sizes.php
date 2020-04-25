<?php
/*
Plugin Name: Human Readable Custom Image Sizes
Description: Automatically create human readable labels for custom image sizes created with `add_image_size()` so that they're selectable in the WP admin.
Version:     1.01
Author:      Marc Guay
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter('image_size_names_choose', 'human_readable_custom_image_sizes');

function human_readable_custom_image_sizes($default_sizes) {

	/*
	 * Our desired return array has the following format: ['image-size-name']=>'Image Size Name'
	 *
	 * get_intermediate_image_sizes() gives us an array in this format: [0]=>'image-size-name',
	 * so we'll use array_flip to get it closer to our returned array format of ['image-size-name']=>0,
	 */
	$custom_image_sizes = array_flip(get_intermediate_image_sizes());

	/*
	 * get_intermediate_image_sizes() gives us some of the core sizes so we'll remove them
	*/
	$custom_image_sizes_clean = array_diff_key($custom_image_sizes, $default_sizes);

	/*
	 * Loop through each custom image size and replace all non alphanumeric characters with
	 *  a space and uppercase the first letter of each word
	*/
	foreach ($custom_image_sizes_clean as $key=>$val){
		$custom_image_sizes_clean[$key] = ucwords(preg_replace("/[^A-Za-z0-9 ]/", ' ', $key));
	}

	/*
	 * Merge the defaults and our custom sizes and return
	 */
	return array_merge( $default_sizes, $custom_image_sizes_clean);

}
