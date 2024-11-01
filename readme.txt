=== Shortlinks By Path ===
Plugin Name: Shortlinks By Path
Contributors: aizatto
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=aizat%2efaiz%40gmail%2ecom&lc=MY&item_name=Ezwan%20Aizat%20Bin%20Abdullah%20Faiz&item_number=Shortlinks%20By%20Path&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted
Author: Ezwan Aizat Bin Abdullah Faiz
Tags: post, posts, page, pages, category, categories, tag, tags, taxonomy, taxonomies, custom post type, custom post types, shortlinks, permalinks
Requires at least: 3
Tested up to: 3
Stable tag: 0.1

== Description ==

Shortlinks By Path hooks into the WordPress filter `get_shortlink` to only return the path for a shortlink. This makes it easier to retrieve the shortlink url with an absolute path minus the domain name.

By default WordPress returns the full path to your post when clicking "Get Shortlink". Shortlinks By Path returns only the path. For example, by default WordPress would return `http://blog.aizatto.com/?p=3565` , with Shortlinks By Path enabled WordPress returns `/?p=3565` .

== How It Works ==

Shortlinks By Path hooks into the WordPress filter `get_shortlink` to only return the path for a shortlink. 

== Installation ==

1. Upload the `shortlinks-by-path` folder into your plugin directory.
1. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Shortened Path

== Why I Created It ==

I needed WordPress to return the path for a given post because it was easier to migrate WordPress installations across different domains, as there would be no broken internal links. For example, migrating from a development internal site, to a production live site.

== Changelog ==

= 0.1 =
* Initial version
