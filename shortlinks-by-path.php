<?php
/*
Plugin Name: Shortlinks By Path
Plugin URI: http://blog.aizatto.com/shortlinks-by-path
Description: Strips off the domain name and leaves the path and query string when you click on "Get Shortlink"
Author: Ezwan Aizat Bin Abdullah Faiz
Author URI: http://aizatto.com
Version: 0.1
License: LGPLv2
*/

add_filter('get_shortlink', 'shortlinks_by_path', 20);

function shortlinks_by_path($shortlink) {
	return parse_url($shortlink, PHP_URL_PATH) . '?' . parse_url($shortlink, PHP_URL_QUERY);
}
