=== Get Posts ===
Author URI: http://www.nurelm.com/themanual
Plugin URI: http://www.nurelm.com/themanual/2009/08/21/nurelm-get-posts/
Contributors: nurelm
Tags: get_posts, post, posts, formatting, list, shortcode
Requires at least: 2.5.1
Tested up to: 2.8.4
Stable tag: 0.1

Adds a shortcode tag [get_posts] to display a list of posts within any static page or post.

== Description ==

This plugin adds the ability to put a shortcode tag in any static page or post and have it display a list of posts using the get_posts template tag.

By default it will show the 10 most recent posts ordered in reverse date order,
but it will accept any of the options provided by the [get_posts template tag](http://codex.wordpress.org/Template_Tags/get_posts).

To use it, just put the following into the HTML of any page or post, use as many times as you like on the same page:

	[get_posts]

This default usage will return the last 10 posts in reverse chronological order.  Along with all the options
provided by the get_posts template tag, it will also accept one additional option:

	[get_posts ul_class='my-class-name']

This is the class assigned to the bullet list.

An example with a few options:

	[get_posts tag="my favorite tag" numberposts=5 orderby="title]

Shows 5 posts with the tag "my favorite tag" ordered by title.

Check the [get_posts template tag](http://codex.wordpress.org/Template_Tags/get_posts) documentation for all of the possible options.

== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory and unzip it.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Place `[get_posts]` in your pages. Check the [plugin homepage](http://www.nurelm.com/themanual/2009/08/21/nurelm-get-posts/) for detailed options and more complex uses.

== Changelog ==

= 0.1 =
* Initial release.
== Frequently Asked Questions ==

Check the [plugin homepage](http://www.nurelm.com/themanual/2009/08/21/nurelm-get-posts/)
