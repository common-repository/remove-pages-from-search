<?php
/*
Plugin Name: Remove Pages From Search
Version: 1.0
Plugin URI: https://en.wordpress.org/plugins/remove-pages-from-search
Description: Simple yet effective plugin that once enabled, will allow only posts with post type POST to be included in your search results.
Author: George Gkouvousis
Author URI: https://8web.gr/en/
License: GPL2
*/

if (!is_admin()) {

function keep_only_posts_in_search($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}

return $query;
}

add_filter('pre_get_posts','keep_only_posts_in_search');
}