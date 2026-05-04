<?php
/**
 * Kingston Chartered Auditing & Advisory — theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'kingston_setup' ) ) {
    function kingston_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'kingston' ),
            'footer'  => __( 'Footer Menu', 'kingston' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'kingston_setup' );

function kingston_enqueue_assets() {
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();

    wp_enqueue_style(
        'kingston-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,500&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'kingston-main',
        $theme_uri . '/assets/css/styles.css',
        array(),
        file_exists( $theme_dir . '/assets/css/styles.css' ) ? filemtime( $theme_dir . '/assets/css/styles.css' ) : '1.0.0'
    );

    wp_enqueue_script(
        'kingston-main',
        $theme_uri . '/assets/js/main.js',
        array(),
        file_exists( $theme_dir . '/assets/js/main.js' ) ? filemtime( $theme_dir . '/assets/js/main.js' ) : '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'kingston_enqueue_assets' );

/**
 * Helper: turn a static-site filename like "about.html" into a WordPress URL.
 *
 * The theme is "static" — pages are rendered from template files, not from
 * the WordPress editor. Internal links use this helper so site owners can map
 * URLs by creating matching pages in WP admin (slug = file basename without
 * ".html"). "index.html" maps to the site root.
 */
function kingston_url( $page ) {
    $page = trim( $page );
    if ( $page === '' || $page === 'index.html' || $page === '/' ) {
        return esc_url( home_url( '/' ) );
    }
    $slug = preg_replace( '/\.html$/', '', $page );
    return esc_url( home_url( '/' . $slug . '/' ) );
}

/**
 * Helper: theme asset URL.
 */
function kingston_asset( $path ) {
    return esc_url( get_template_directory_uri() . '/assets/' . ltrim( $path, '/' ) );
}

/**
 * Mark the active nav item based on the current template file.
 *
 * Pass the basename (e.g. "about") of the current page; returns ' class="active"'
 * if it matches the current request, else empty string.
 */
function kingston_active( $slug ) {
    $current = kingston_current_slug();
    return ( $current === $slug ) ? ' class="active"' : '';
}

function kingston_current_slug() {
    if ( is_front_page() || is_home() ) {
        return 'index';
    }
    $obj = get_queried_object();
    if ( $obj && isset( $obj->post_name ) ) {
        return $obj->post_name;
    }
    $path = trim( wp_parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ) ?? '', '/' );
    if ( $path === '' ) {
        return 'index';
    }
    $segments = explode( '/', $path );
    return end( $segments );
}
