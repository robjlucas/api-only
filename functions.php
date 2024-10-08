<?php

// Disable feeds
function disable_feeds() {
  wp_die( __('No feed available, please visit our homepage.', 'simple-message-theme') );
}
add_action('do_feed', 'disable_feeds', 1);
add_action('do_feed_rdf', 'disable_feeds', 1);
add_action('do_feed_rss', 'disable_feeds', 1);
add_action('do_feed_rss2', 'disable_feeds', 1);
add_action('do_feed_atom', 'disable_feeds', 1);
add_action('do_feed_rss2_comments', 'disable_feeds', 1);
add_action('do_feed_atom_comments', 'disable_feeds', 1);

// Disable search functionality
function disable_search($query, $error = true) {
  if (is_search()) {
    wp_die(__('Search is disabled on this site.', 'simple-message-theme'));
  }
}
add_action('parse_query', 'disable_search');

// Some features must be explicitly enabled in the theme.
// See https://developer.wordpress.org/reference/functions/add_theme_support/
add_theme_support('post-thumbnails');
