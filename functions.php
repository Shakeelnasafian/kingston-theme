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
 * Resolve an internal link slug (or any URL) to a real URL.
 *
 * Pass a plain page slug like "about" or "free-zone-dmcc" and this returns
 * the matching WordPress page URL. Empty string, "/", "index" all map to the
 * site root. Absolute URLs (http://, mailto:, tel:, #) are returned as-is.
 *
 * The trailing ".html" form (e.g. "about.html") is also accepted for
 * backward compatibility with the original static-site filenames.
 */
function kingston_url( $page ) {
    $page = trim( (string) $page );
    if ( $page === '' || $page === '/' || $page === 'index' || $page === 'index.html' ) {
        return esc_url( home_url( '/' ) );
    }
    // Already absolute (http/https/mailto/tel/#) — return as-is.
    if ( preg_match( '#^(https?:|mailto:|tel:|#)#i', $page ) ) {
        return esc_url( $page );
    }
    $slug = preg_replace( '/\.html$/', '', $page );
    return esc_url( home_url( '/' . ltrim( $slug, '/' ) . '/' ) );
}

/**
 * Helper: theme asset URL.
 */
function kingston_asset( $path ) {
    return esc_url( get_template_directory_uri() . '/assets/' . ltrim( $path, '/' ) );
}

/**
 * Mark the active nav item based on the current template file.
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

/* =====================================================================
 * Editable content helpers (work with or without ACF installed)
 * ===================================================================== */

/**
 * Resolve the WordPress page that holds site-wide theme options.
 *
 * Admin creates one page using the "Theme Options (Kingston)" template; this
 * function finds that page so we can read its ACF fields. Result is cached
 * for the request.
 *
 * Returns 0 if no such page exists yet — helpers gracefully fall back to
 * built-in defaults in that case.
 */
function kingston_options_post_id() {
    static $cached = null;
    if ( $cached !== null ) {
        return $cached;
    }
    $q = get_posts( array(
        'post_type'        => 'page',
        'post_status'      => array( 'publish', 'private', 'draft' ),
        'posts_per_page'   => 1,
        'meta_key'         => '_wp_page_template',
        'meta_value'       => 'page-theme-options.php',
        'fields'           => 'ids',
        'suppress_filters' => true,
        'no_found_rows'    => true,
    ) );
    $cached = $q ? (int) $q[0] : 0;
    return $cached;
}

/**
 * Read an ACF field with a built-in default.
 *
 * - Returns $default if ACF isn't active or the field is empty.
 * - Safe to call from any template; never throws.
 */
function kingston_field( $name, $default = '', $post_id = false ) {
    if ( ! function_exists( 'get_field' ) ) {
        return $default;
    }
    $val = get_field( $name, $post_id );
    if ( $val === '' || $val === null || $val === false || $val === array() ) {
        return $default;
    }
    return $val;
}

/** Read a Theme Options field (set globally on the Theme Options page). */
function kingston_option( $name, $default = '' ) {
    $oid = kingston_options_post_id();
    if ( ! $oid ) {
        return $default;
    }
    return kingston_field( $name, $default, $oid );
}

/**
 * Read an ACF Repeater (or any array field) with a fallback set of rows.
 *
 * Each fallback row is a plain associative array with the same keys you'd get
 * from the repeater — that lets templates use one rendering loop regardless of
 * whether content comes from ACF or the static defaults.
 */
function kingston_rows( $name, $defaults = array(), $post_id = false ) {
    if ( ! function_exists( 'get_field' ) ) {
        return $defaults;
    }
    $rows = get_field( $name, $post_id );
    return ( is_array( $rows ) && ! empty( $rows ) ) ? $rows : $defaults;
}

/** Same as kingston_rows but reads from the Theme Options page. */
function kingston_option_rows( $name, $defaults = array() ) {
    $oid = kingston_options_post_id();
    if ( ! $oid ) {
        return $defaults;
    }
    return kingston_rows( $name, $defaults, $oid );
}

/**
 * Resolve an ACF Image field to a URL string regardless of return format
 * (Array, URL or ID). Falls back to $default if missing.
 */
function kingston_image_url( $name, $default = '', $post_id = false ) {
    if ( ! function_exists( 'get_field' ) ) {
        return $default;
    }
    $val = get_field( $name, $post_id );
    return kingston_normalize_image( $val, $default );
}

/** Same as kingston_image_url but reads from the Theme Options page. */
function kingston_option_image( $name, $default = '' ) {
    $oid = kingston_options_post_id();
    if ( ! $oid ) {
        return $default;
    }
    return kingston_image_url( $name, $default, $oid );
}

/** Pull a scalar value out of a repeater row, with a default. */
function kingston_row( $row, $key, $default = '' ) {
    if ( ! is_array( $row ) || ! isset( $row[ $key ] ) ) {
        return $default;
    }
    $v = $row[ $key ];
    if ( $v === '' || $v === null || $v === false ) {
        return $default;
    }
    return $v;
}

/** Pull an image URL out of a repeater row, with a default. */
function kingston_row_image( $row, $key, $default = '' ) {
    if ( ! is_array( $row ) || ! isset( $row[ $key ] ) ) {
        return $default;
    }
    return kingston_normalize_image( $row[ $key ], $default );
}

/** Internal: normalize an ACF image value (Array | URL string | attachment ID) to a URL. */
function kingston_normalize_image( $val, $default = '' ) {
    if ( is_array( $val ) && ! empty( $val['url'] ) ) {
        return $val['url'];
    }
    if ( is_string( $val ) && $val !== '' ) {
        return $val;
    }
    if ( is_numeric( $val ) && (int) $val > 0 ) {
        $u = wp_get_attachment_image_url( (int) $val, 'full' );
        return $u ? $u : $default;
    }
    return $default;
}

/* =====================================================================
 * Admin notices: guide site owner to install ACF + create options page
 * ===================================================================== */

function kingston_admin_notices() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    if ( ! function_exists( 'get_field' ) ) {
        $install_url = admin_url( 'plugin-install.php?s=Advanced+Custom+Fields&tab=search&type=term' );
        echo '<div class="notice notice-warning"><p><strong>Kingston theme:</strong> install the free <a href="' . esc_url( $install_url ) . '">Advanced Custom Fields</a> plugin to edit page content from the WP admin. Without it the site renders the built-in default content.</p></div>';
        return;
    }

    if ( ! kingston_options_post_id() ) {
        $new_page_url = admin_url( 'post-new.php?post_type=page' );
        echo '<div class="notice notice-info"><p><strong>Kingston theme:</strong> create a Page (any title, e.g. "Theme Options") and pick the <em>Theme Options (Kingston)</em> template from the Page Attributes box to manage site-wide content (logo, header, footer, contact, CTA). <a href="' . esc_url( $new_page_url ) . '">Add new page →</a></p></div>';
    }
}
add_action( 'admin_notices', 'kingston_admin_notices' );

/* =====================================================================
 * Inline SVG icon library + ACF field group registrations
 * ===================================================================== */

require_once get_template_directory() . '/inc/icons.php';
require_once get_template_directory() . '/inc/acf-fields.php';
