=== Human Readable Custom Image Sizes ===
Contributors: MarcGuay
Tags: image
Requires at least: 3.3.0
Tested up to: 4.4
Stable tag: 1.01
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Automatically create human readable labels for custom image sizes created with `add_image_size()` so that they're selectable in the WP admin.

== Description ==

Automatically create human readable labels for custom image sizes created with `add_image_size()` so that they're selectable in the WP admin.  For example, when you insert media into a post, in the Attachment Display Settings->Size select list, your custom image size will now be available.  The plugin uses the `image_size_names_choose` filter as described [here](https://developer.wordpress.org/reference/functions/add_image_size/) in the For Media Library Images (Admin) section.  By default the human readable name is the 'name' variable given to `add_image_size()` stripped of non-alphanumeric characters and the first letter of each word in uppercase.

== Installation ==

1. Upload `human-readable-custom-image-sizes` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0 =
* First release
