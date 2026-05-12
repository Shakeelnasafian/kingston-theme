<?php
/**
 * Kingston theme — inline SVG icon renderer.
 *
 * Templates call kingston_icon( $name, $size ) where $name comes from the
 * choices in kingston_icon_choices(). Returns a string so it can be echoed
 * directly inside markup.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render an inline SVG by name. Falls back to the "check" icon if unknown.
 */
function kingston_icon( $name = 'check', $size = 22 ) {
    $size = (int) $size;
    $stroke = 'stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"';
    $head = sprintf(
        '<svg width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="none" %2$s>',
        $size, $stroke
    );

    $body = '';
    switch ( $name ) {
        case 'check':
            $body = '<polyline points="20 6 9 17 4 12"/>';
            break;
        case 'document':
            $body = '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>';
            break;
        case 'clock':
            $body = '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>';
            break;
        case 'search':
            $body = '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>';
            break;
        case 'shield':
            $body = '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>';
            break;
        case 'shield_check':
            $body = '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/>';
            break;
        case 'building':
            $body = '<path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/><path d="M9 9v.01"/><path d="M9 12v.01"/><path d="M9 15v.01"/><path d="M9 18v.01"/>';
            break;
        case 'bars':
            $body = '<line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/>';
            break;
        case 'phone':
            $body = '<path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 2.08 4.18 2 2 0 0 1 4.07 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>';
            break;
        case 'mail':
            $body = '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>';
            break;
        case 'pin':
            $body = '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>';
            break;
        case 'globe':
            $body = '<circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>';
            break;
        case 'star':
            $body = '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>';
            break;
        case 'users':
            $body = '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>';
            break;
        case 'lock':
            $body = '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>';
            break;
        case 'sun':
            $body = '<path d="M12 2v4"/><path d="M12 18v4"/><path d="M4.93 4.93l2.83 2.83"/><path d="M16.24 16.24l2.83 2.83"/><path d="M2 12h4"/><path d="M18 12h4"/><path d="M4.93 19.07l2.83-2.83"/><path d="M16.24 7.76l2.83-2.83"/>';
            break;
        case 'percent':
            $body = '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>';
            break;
        case 'cog':
            $body = '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>';
            break;
        case 'chart':
            $body = '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>';
            break;
        case 'home':
            $body = '<path d="M3 21h18"/><path d="M5 21V11l7-7 7 7v10"/><path d="M9 21V12h6v9"/>';
            break;
        case 'currency':
            $body = '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>';
            break;
        case 'trending':
            $body = '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>';
            break;
        case 'target':
            $body = '<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>';
            break;
        case 'eye':
            $body = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>';
            break;
        case 'compass':
            $body = '<path d="M3 12c0-5 4-9 9-9s9 4 9 9-4 9-9 9-9-4-9-9z"/><path d="M12 3v18"/>';
            break;
        default:
            $body = '<polyline points="20 6 9 17 4 12"/>';
    }

    return $head . $body . '</svg>';
}
