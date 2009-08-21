<?php
/*
Plugin Name: Get Posts
Plugin URI: http://www.nurelm.com/themanual/2009/08/21/nurelm-get-posts/
Description: Adds a shortcode tag [get_posts] to display a list of posts on any static page or post.
Version: 0.1
Author: Sam Shaaban
Author URI: http://www.nurelm.com/
*/

/*  Copyright 2009  Sami Shaaban  (email : sam@nurelm.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// gets the list HTML
function get_posts_generate($args = '') {
		
	$r = shortcode_atts(
		array(
			'numberposts'  => '10',
			'offset'       => '',
			'category'     => '',
			'category_name'=> '',
			'tag'          => '',
			'orderby'      => 'date',
			'order'        => '',
			'include'      => '',
			'exclude'      => '',
			'meta_key'     => '',
			'meta_value'   => '',
			'post_type'    => '',
			'post_status'  => '',
			'post_parent'  => '',
			'nopaging'     => '',
			'ul_class'     => 'get_posts_class'),
		$args );
		
	$content = "\n\n<ul class=\"".$r['ul_class']."\">\n";
	
	$posts = get_posts($args);
	foreach( $posts as $post ) {
    $content = $content.
			"  " .
			"<li><a href=\"" .
			get_permalink($post->ID) .
			"\">" .
			$post->post_title .
      "</a></li>\n";
	}	
	$content = $content.'</ul>';
	
	return $content;	
}

add_shortcode('get_posts', 'get_posts_generate');
?>
