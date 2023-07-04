<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

global $wpdb, $table_prefix;
$wp_gms_movies = $table_prefix.'gms_movies';
$wp_imdb_api = $table_prefix.'imdb_api';
$wp_gms_ads=$table_prefix.'gms_ads';


$q = "DROP TABLE $wp_gms_movies ";
$q2 = "DROP TABLE $wp_imdb_api ";
$q3 = "DROP TABLE $wp_gms_ads ";
$wpdb->query($q);
$wpdb->query($q2);
$wpdb->query($q3);
