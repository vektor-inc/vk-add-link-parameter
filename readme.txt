=== VK Add Link Parameter ===
Contributors: vektor-inc, rickaddison7634
Tags: link, url parameter, affiliate, tracking, form, javascript
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

VK Add Link Parameter is a lightweight WordPress plugin that automatically adds a specified URL parameter (such as "vwaf") to all anchor links and form submissions on your site. This is particularly useful for affiliate tracking, campaign tracking, or passing custom parameters through URLs and forms without additional configuration.

- Adds a specified parameter to all anchor tags (`<a>`) with href.
- Adds the same parameter to all forms as a hidden input if it exists in the query string.
- Written in JavaScript and PHP for seamless integration.

== Installation ==

1. Upload and extruct the `vk-add-link-parameter.zip` to your WordPress plugin directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. The plugin will automatically work on all public-facing pages.

== Frequently Asked Questions ==

= Can I change the parameter name? =
Currently, the parameter name "vwaf" is hardcoded, but you can modify the JavaScript and PHP files to use a different name if needed.

= Does this plugin support custom post types or custom forms? =
Yes. As long as the HTML uses standard `<a>` and `<form>` tags, the parameter will be applied.

== Screenshots ==

1. All links on the site will have the "vwaf" parameter appended if present in the URL.
2. All forms will include a hidden "vwaf" input field if the parameter exists.

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
First release.

== License ==

This plugin is licensed under the GPLv2 or later.
