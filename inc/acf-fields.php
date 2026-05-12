<?php
/**
 * Kingston theme — ACF field group registrations.
 *
 * Field groups are registered in PHP via acf_add_local_field_group(), so site
 * owners do not need to import JSON or click through the ACF admin UI to set
 * them up. Just install the free ACF plugin and the editing UI appears.
 *
 * Every kingston_field()/kingston_option() call in templates ships a built-in
 * default — so an empty field renders the original static content.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return; // ACF not active — skip registration. Templates fall back to defaults.
}

add_action( 'acf/init', 'kingston_register_field_groups' );

function kingston_register_field_groups() {

    /* -----------------------------------------------------------------
     * 1. Theme Options — site-wide chrome (header, footer, CTA banner)
     *    Attached to any Page using the "Theme Options (Kingston)" template.
     * ----------------------------------------------------------------- */
    acf_add_local_field_group( array(
        'key'      => 'group_kingston_theme_options',
        'title'    => 'Theme Options — Kingston',
        'location' => array( array( array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-theme-options.php',
        ) ) ),
        'menu_order'  => 0,
        'position'    => 'normal',
        'style'       => 'default',
        'label_placement'    => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array( 'the_content', 'discussion', 'comments', 'author' ),
        'fields'   => array(

            /* === Top bar === */
            array( 'key' => 'k_to_tab_topbar', 'label' => 'Top bar', 'name' => '', 'type' => 'tab', 'placement' => 'top' ),
            array( 'key' => 'k_to_topbar_phone',     'label' => 'Phone',      'name' => 'topbar_phone',     'type' => 'text',  'default_value' => '+971 50 874 7098' ),
            array( 'key' => 'k_to_topbar_email',     'label' => 'Email',      'name' => 'topbar_email',     'type' => 'email', 'default_value' => 'info@kingstonca.com' ),
            array( 'key' => 'k_to_topbar_address',   'label' => 'Address',    'name' => 'topbar_address',   'type' => 'text',  'default_value' => 'Sheikh Zayed Road, Dubai · UAE' ),
            array( 'key' => 'k_to_linkedin_url',     'label' => 'LinkedIn URL',  'name' => 'linkedin_url',  'type' => 'url',   'default_value' => '#' ),
            array( 'key' => 'k_to_instagram_url',    'label' => 'Instagram URL', 'name' => 'instagram_url', 'type' => 'url',   'default_value' => '#' ),
            array( 'key' => 'k_to_facebook_url',     'label' => 'Facebook URL',  'name' => 'facebook_url',  'type' => 'url',   'default_value' => '#' ),

            /* === Brand === */
            array( 'key' => 'k_to_tab_brand', 'label' => 'Brand', 'name' => '', 'type' => 'tab' ),
            array( 'key' => 'k_to_brand_mark',    'label' => 'Brand mark (1–2 chars)', 'name' => 'brand_mark',    'type' => 'text', 'default_value' => 'K', 'maxlength' => 4 ),
            array( 'key' => 'k_to_brand_name',    'label' => 'Brand name',     'name' => 'brand_name',    'type' => 'text', 'default_value' => 'Kingston' ),
            array( 'key' => 'k_to_brand_tagline', 'label' => 'Brand tagline',  'name' => 'brand_tagline', 'type' => 'text', 'default_value' => 'Chartered Auditing & Advisory' ),
            array( 'key' => 'k_to_brand_logo',    'label' => 'Brand logo image (optional, replaces letter mark + text if set)', 'name' => 'brand_logo', 'type' => 'image', 'return_format' => 'array' ),

            /* === Header CTA & primary nav === */
            array( 'key' => 'k_to_tab_header', 'label' => 'Header navigation', 'name' => '', 'type' => 'tab' ),
            array( 'key' => 'k_to_header_cta_label', 'label' => 'Header CTA button — label', 'name' => 'header_cta_label', 'type' => 'text', 'default_value' => 'Book a Consultation' ),
            array( 'key' => 'k_to_header_cta_link',  'label' => 'Header CTA button — link (slug or URL)', 'name' => 'header_cta_link', 'type' => 'text', 'default_value' => 'contact' ),

            array( 'key' => 'k_to_nav_items', 'label' => 'Primary nav items',
                'name' => 'nav_items', 'type' => 'repeater',
                'instructions' => 'Each row is one top-level nav item. Set "Has dropdown" to add multi-column dropdown groups (used for Services, Free Zones).',
                'button_label' => 'Add nav item',
                'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_to_nav_label',       'label' => 'Label',     'name' => 'label',       'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'k_to_nav_url',         'label' => 'Link (slug or URL)', 'name' => 'url', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'k_to_nav_active_slug', 'label' => 'Active slug (for highlighting)', 'name' => 'active_slug', 'type' => 'text', 'wrapper' => array( 'width' => '20' ), 'instructions' => 'Optional. e.g. "about" — matches kingston_active().' ),
                    array( 'key' => 'k_to_nav_has_dropdown','label' => 'Has dropdown',  'name' => 'has_dropdown',  'type' => 'true_false', 'ui' => 1 ),
                    array( 'key' => 'k_to_nav_dropdown_class', 'label' => 'Dropdown extra class (optional)', 'name' => 'dropdown_class', 'type' => 'text', 'conditional_logic' => array( array( array( 'field' => 'k_to_nav_has_dropdown', 'operator' => '==', 'value' => '1' ) ) ) ),
                    array( 'key' => 'k_to_nav_columns', 'label' => 'Dropdown columns', 'name' => 'columns', 'type' => 'repeater', 'button_label' => 'Add column', 'layout' => 'block',
                        'conditional_logic' => array( array( array( 'field' => 'k_to_nav_has_dropdown', 'operator' => '==', 'value' => '1' ) ) ),
                        'sub_fields' => array(
                            array( 'key' => 'k_to_nav_col_title', 'label' => 'Column title', 'name' => 'title', 'type' => 'text' ),
                            array( 'key' => 'k_to_nav_col_links', 'label' => 'Links', 'name' => 'links', 'type' => 'repeater', 'button_label' => 'Add link', 'layout' => 'table',
                                'sub_fields' => array(
                                    array( 'key' => 'k_to_nav_col_link_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                                    array( 'key' => 'k_to_nav_col_link_url',   'label' => 'Link',  'name' => 'url',   'type' => 'text' ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),

            /* === Footer === */
            array( 'key' => 'k_to_tab_footer', 'label' => 'Footer', 'name' => '', 'type' => 'tab' ),
            array( 'key' => 'k_to_footer_description', 'label' => 'Footer description', 'name' => 'footer_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'A trusted Dubai-based audit, tax and advisory firm built on integrity, technical excellence and financial transparency.' ),
            array( 'key' => 'k_to_footer_columns', 'label' => 'Footer link columns', 'name' => 'footer_columns', 'type' => 'repeater', 'button_label' => 'Add column', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_to_footer_col_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text' ),
                    array( 'key' => 'k_to_footer_col_links',   'label' => 'Links',   'name' => 'links',   'type' => 'repeater', 'button_label' => 'Add link', 'layout' => 'table',
                        'sub_fields' => array(
                            array( 'key' => 'k_to_footer_col_link_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                            array( 'key' => 'k_to_footer_col_link_url',   'label' => 'Link',  'name' => 'url',   'type' => 'text' ),
                        ),
                    ),
                ),
            ),
            array( 'key' => 'k_to_footer_address', 'label' => 'Office address', 'name' => 'footer_address', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Office 203, Aspin Commercial Tower, Sheikh Zayed Road, Dubai, UAE' ),
            array( 'key' => 'k_to_footer_phone',   'label' => 'Footer phone',   'name' => 'footer_phone',   'type' => 'text', 'default_value' => '+971 50 874 7098' ),
            array( 'key' => 'k_to_footer_email',   'label' => 'Footer email',   'name' => 'footer_email',   'type' => 'email','default_value' => 'info@kingstonca.com' ),
            array( 'key' => 'k_to_footer_copyright', 'label' => 'Copyright line', 'name' => 'footer_copyright', 'type' => 'text', 'instructions' => 'Use {year} for current year.', 'default_value' => '© {year} Kingston Chartered Auditing & Advisory. All rights reserved.' ),
            array( 'key' => 'k_to_footer_license',   'label' => 'License line',   'name' => 'footer_license',   'type' => 'text', 'default_value' => 'Licensed in the UAE · IFRS & FTA-compliant' ),

            /* === Shared CTA banner === */
            array( 'key' => 'k_to_tab_cta', 'label' => 'CTA banner (used everywhere)', 'name' => '', 'type' => 'tab' ),
            array( 'key' => 'k_to_cta_eyebrow',     'label' => 'Eyebrow',  'name' => 'cta_eyebrow',     'type' => 'text',     'default_value' => 'Ready to talk?' ),
            array( 'key' => 'k_to_cta_heading',     'label' => 'Heading',  'name' => 'cta_heading',     'type' => 'text',     'default_value' => 'Bring us your hardest audit, tax or advisory question.' ),
            array( 'key' => 'k_to_cta_description', 'label' => 'Description', 'name' => 'cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book a free 30-minute consultation. We will tell you straight whether we can help — and how much it will cost.' ),
            array( 'key' => 'k_to_cta_primary_label', 'label' => 'Primary button — label', 'name' => 'cta_primary_label', 'type' => 'text', 'default_value' => 'Book consultation', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_to_cta_primary_link',  'label' => 'Primary button — link',  'name' => 'cta_primary_link',  'type' => 'text', 'default_value' => 'contact', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_to_cta_secondary_label', 'label' => 'Secondary button — label', 'name' => 'cta_secondary_label', 'type' => 'text', 'default_value' => 'Call +971 50 874 7098', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_to_cta_secondary_link',  'label' => 'Secondary button — link',  'name' => 'cta_secondary_link',  'type' => 'text', 'default_value' => 'tel:+971508747098', 'wrapper' => array( 'width' => '50' ) ),

            /* === Logo strip === */
            array( 'key' => 'k_to_tab_logos', 'label' => 'Client logos', 'name' => '', 'type' => 'tab' ),
            array( 'key' => 'k_to_logos_title', 'label' => 'Logo strip title', 'name' => 'logos_title', 'type' => 'text', 'default_value' => 'Trusted by founders, family offices & multinationals across the UAE' ),
            array( 'key' => 'k_to_logos_items', 'label' => 'Logos', 'name' => 'logos_items', 'type' => 'repeater', 'button_label' => 'Add logo', 'layout' => 'table',
                'sub_fields' => array(
                    array( 'key' => 'k_to_logo_text', 'label' => 'Text label', 'name' => 'text', 'type' => 'text', 'instructions' => 'Used if no image uploaded.' ),
                    array( 'key' => 'k_to_logo_image','label' => 'Image (optional)', 'name' => 'image', 'type' => 'image', 'return_format' => 'array' ),
                ),
            ),

            /* === Marquee === */
            array( 'key' => 'k_to_tab_marquee', 'label' => 'Industries marquee', 'name' => '', 'type' => 'tab' ),
            array( 'key' => 'k_to_marquee_items', 'label' => 'Marquee items', 'name' => 'marquee_items', 'type' => 'repeater', 'button_label' => 'Add item', 'layout' => 'table',
                'sub_fields' => array(
                    array( 'key' => 'k_to_marquee_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),

            /* === Topbar / contact reach quick-jump === */
        ),
    ) );

    /* -----------------------------------------------------------------
     * 2. Front Page — hero slider, services, freezones, etc.
     * ----------------------------------------------------------------- */
    acf_add_local_field_group( array(
        'key'      => 'group_kingston_front_page',
        'title'    => 'Front Page — Kingston',
        'location' => array( array( array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'front-page.php',
        ) ) ),
        'menu_order'  => 0,
        'position'    => 'normal',
        'style'       => 'default',
        'hide_on_screen' => array( 'the_content', 'discussion', 'comments', 'author' ),
        'fields'   => array(

            array( 'key' => 'k_fp_tab_hero', 'label' => 'Hero slider', 'type' => 'tab' ),
            array( 'key' => 'k_fp_hero_slides', 'label' => 'Hero slides', 'name' => 'hero_slides', 'type' => 'repeater', 'button_label' => 'Add slide', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_fp_hero_eyebrow',  'label' => 'Eyebrow',  'name' => 'eyebrow',  'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
                    array( 'key' => 'k_fp_hero_heading',  'label' => 'Heading (HTML allowed — wrap a word in <span class="word-gold"> for the gold accent)', 'name' => 'heading', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '50' ) ),
                    array( 'key' => 'k_fp_hero_lead',     'label' => 'Lead paragraph', 'name' => 'lead', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'k_fp_hero_btn1_label', 'label' => 'Primary button — label', 'name' => 'primary_label', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'k_fp_hero_btn1_link',  'label' => 'Primary button — link',  'name' => 'primary_link',  'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'k_fp_hero_btn2_label', 'label' => 'Secondary button — label', 'name' => 'secondary_label', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'k_fp_hero_btn2_link',  'label' => 'Secondary button — link',  'name' => 'secondary_link',  'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'k_fp_hero_image',    'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array', 'wrapper' => array( 'width' => '50' ) ),
                    array( 'key' => 'k_fp_hero_image_alt','label' => 'Image alt text', 'name' => 'image_alt', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
                    array( 'key' => 'k_fp_hero_emblem',   'label' => 'Emblem text (HTML allowed)', 'name' => 'emblem', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'k_fp_hero_trust',    'label' => 'Trust stats (3 max)', 'name' => 'trust_stats', 'type' => 'repeater', 'min' => 0, 'max' => 3, 'layout' => 'table',
                        'sub_fields' => array(
                            array( 'key' => 'k_fp_trust_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'instructions' => 'Use a number to animate (e.g. 500), or any text (e.g. IFRS).' ),
                            array( 'key' => 'k_fp_trust_suffix', 'label' => 'Suffix', 'name' => 'suffix', 'type' => 'text' ),
                            array( 'key' => 'k_fp_trust_label',  'label' => 'Label',  'name' => 'label',  'type' => 'text' ),
                        ),
                    ),
                    array( 'key' => 'k_fp_hero_cards', 'label' => 'Floating info cards (3 max)', 'name' => 'hero_cards', 'type' => 'repeater', 'min' => 0, 'max' => 3, 'layout' => 'table',
                        'sub_fields' => array(
                            array( 'key' => 'k_fp_card_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                            array( 'key' => 'k_fp_card_value', 'label' => 'Value', 'name' => 'value', 'type' => 'text' ),
                            array( 'key' => 'k_fp_card_icon',  'label' => 'Icon', 'name' => 'icon', 'type' => 'select', 'choices' => kingston_icon_choices(), 'default_value' => 'check' ),
                        ),
                    ),
                ),
            ),

            array( 'key' => 'k_fp_tab_services', 'label' => 'Services slider', 'type' => 'tab' ),
            array( 'key' => 'k_fp_svc_eyebrow', 'label' => 'Eyebrow', 'name' => 'services_eyebrow', 'type' => 'text', 'default_value' => 'What we do', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_fp_svc_heading', 'label' => 'Heading', 'name' => 'services_heading', 'type' => 'text', 'default_value' => 'End-to-end audit, tax & advisory — under one trusted roof', 'wrapper' => array( 'width' => '60' ) ),
            array( 'key' => 'k_fp_svc_description', 'label' => 'Description', 'name' => 'services_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Whether you are scaling a family business, listing a company or navigating UAE tax reform, our partners deliver rigorous work and clear counsel — on time, every time.' ),
            array( 'key' => 'k_fp_svc_items', 'label' => 'Service cards', 'name' => 'service_cards', 'type' => 'repeater', 'button_label' => 'Add service', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_fp_svc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'k_fp_svc_link',  'label' => 'Link',  'name' => 'link',  'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'k_fp_svc_icon',  'label' => 'Icon',  'name' => 'icon',  'type' => 'select', 'choices' => kingston_icon_choices(), 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'k_fp_svc_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'k_fp_svc_image', 'label' => 'Card image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array' ),
                ),
            ),

            array( 'key' => 'k_fp_tab_setup', 'label' => 'Business setup', 'type' => 'tab' ),
            array( 'key' => 'k_fp_setup_eyebrow', 'label' => 'Eyebrow', 'name' => 'setup_eyebrow', 'type' => 'text', 'default_value' => 'Business Setup', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_fp_setup_heading', 'label' => 'Heading', 'name' => 'setup_heading', 'type' => 'text', 'default_value' => 'Three setup paths. One trusted partner.', 'wrapper' => array( 'width' => '60' ) ),
            array( 'key' => 'k_fp_setup_description', 'label' => 'Description', 'name' => 'setup_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Mainland, Free Zone or Offshore — Kingston handles end-to-end UAE company formation, then continues as your auditor and tax advisor. One firm. One team. No hand-offs.' ),
            array( 'key' => 'k_fp_setup_items', 'label' => 'Setup cards (3 expected)', 'name' => 'setup_cards', 'type' => 'repeater', 'button_label' => 'Add card', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_fp_setup_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'k_fp_setup_link',  'label' => 'Link',  'name' => 'link',  'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'k_fp_setup_icon',  'label' => 'Icon',  'name' => 'icon',  'type' => 'select', 'choices' => kingston_icon_choices(), 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'k_fp_setup_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'k_fp_setup_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array' ),
                    array( 'key' => 'k_fp_setup_btn',   'label' => 'Read-more label', 'name' => 'read_label', 'type' => 'text', 'default_value' => 'Learn more' ),
                ),
            ),
            array( 'key' => 'k_fp_setup_compare_label', 'label' => 'Compare button — label', 'name' => 'setup_compare_label', 'type' => 'text', 'default_value' => 'Compare Mainland · Free Zone · Offshore', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_fp_setup_compare_link',  'label' => 'Compare button — link',  'name' => 'setup_compare_link',  'type' => 'text', 'default_value' => 'business-setup', 'wrapper' => array( 'width' => '50' ) ),

            array( 'key' => 'k_fp_tab_fz', 'label' => 'Free Zones grid', 'type' => 'tab' ),
            array( 'key' => 'k_fp_fz_eyebrow', 'label' => 'Eyebrow', 'name' => 'fz_eyebrow', 'type' => 'text', 'default_value' => 'UAE Free Zones', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_fp_fz_heading', 'label' => 'Heading', 'name' => 'fz_heading', 'type' => 'text', 'default_value' => 'Nine UAE Free Zones. Pick the one that fits.', 'wrapper' => array( 'width' => '60' ) ),
            array( 'key' => 'k_fp_fz_description', 'label' => 'Description', 'name' => 'fz_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Each zone has its own regulator, activity list and cost profile. Below is a quick tour — every card opens a full page on that zone.' ),
            array( 'key' => 'k_fp_fz_cards', 'label' => 'Free Zone cards', 'name' => 'fz_cards', 'type' => 'repeater', 'button_label' => 'Add zone', 'layout' => 'block',
                'sub_fields' => kingston_fz_card_subfields(),
            ),
            array( 'key' => 'k_fp_fz_all_label', 'label' => 'View-all button — label', 'name' => 'fz_all_label', 'type' => 'text', 'default_value' => 'All UAE Free Zones & comparison', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_fp_fz_all_link',  'label' => 'View-all button — link',  'name' => 'fz_all_link',  'type' => 'text', 'default_value' => 'freezones', 'wrapper' => array( 'width' => '50' ) ),

            array( 'key' => 'k_fp_tab_about', 'label' => 'About preview', 'type' => 'tab' ),
            array( 'key' => 'k_fp_about_eyebrow', 'label' => 'Eyebrow', 'name' => 'about_eyebrow', 'type' => 'text', 'default_value' => 'Why Kingston' ),
            array( 'key' => 'k_fp_about_heading', 'label' => 'Heading', 'name' => 'about_heading', 'type' => 'text', 'default_value' => 'A boutique firm built on the standards of a Big Four — without the Big Four overhead.' ),
            array( 'key' => 'k_fp_about_description', 'label' => 'Description', 'name' => 'about_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'We exist to be the audit, tax and advisory partner UAE businesses can actually trust — accessible to founders, rigorous enough for boards. Our vision is to be one of the UAE\'s most trusted firms, recognised for integrity, technical excellence and financial transparency.' ),
            array( 'key' => 'k_fp_about_bullets', 'label' => 'Bullets', 'name' => 'about_bullets', 'type' => 'repeater', 'button_label' => 'Add bullet', 'layout' => 'table',
                'sub_fields' => array(
                    array( 'key' => 'k_fp_about_bullet_strong', 'label' => 'Bold lead', 'name' => 'strong', 'type' => 'text' ),
                    array( 'key' => 'k_fp_about_bullet_text',   'label' => 'Body text', 'name' => 'text',   'type' => 'text' ),
                ),
            ),
            array( 'key' => 'k_fp_about_image', 'label' => 'Image', 'name' => 'about_image', 'type' => 'image', 'return_format' => 'array' ),
            array( 'key' => 'k_fp_about_badge_big',   'label' => 'Badge — big text', 'name' => 'about_badge_big',   'type' => 'text', 'default_value' => 'A+', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_fp_about_badge_label', 'label' => 'Badge — label',    'name' => 'about_badge_label', 'type' => 'text', 'default_value' => 'Audit Quality Rating', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_fp_about_btn_label', 'label' => 'Button — label', 'name' => 'about_btn_label', 'type' => 'text', 'default_value' => 'More about Kingston', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_fp_about_btn_link',  'label' => 'Button — link',  'name' => 'about_btn_link',  'type' => 'text', 'default_value' => 'about', 'wrapper' => array( 'width' => '50' ) ),

            array( 'key' => 'k_fp_tab_stats', 'label' => 'Stats', 'type' => 'tab' ),
            array( 'key' => 'k_fp_stats_eyebrow', 'label' => 'Eyebrow', 'name' => 'stats_eyebrow', 'type' => 'text', 'default_value' => 'By the numbers', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_fp_stats_heading', 'label' => 'Heading', 'name' => 'stats_heading', 'type' => 'text', 'default_value' => 'Outcomes our clients can count on.', 'wrapper' => array( 'width' => '60' ) ),
            array( 'key' => 'k_fp_stats_items', 'label' => 'Stats', 'name' => 'stats_items', 'type' => 'repeater', 'button_label' => 'Add stat', 'layout' => 'table',
                'sub_fields' => array(
                    array( 'key' => 'k_fp_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'k_fp_stat_suffix', 'label' => 'Suffix', 'name' => 'suffix', 'type' => 'text' ),
                    array( 'key' => 'k_fp_stat_label',  'label' => 'Label',  'name' => 'label',  'type' => 'text' ),
                ),
            ),

            array( 'key' => 'k_fp_tab_process', 'label' => 'Process', 'type' => 'tab' ),
            array( 'key' => 'k_fp_process_eyebrow', 'label' => 'Eyebrow', 'name' => 'process_eyebrow', 'type' => 'text', 'default_value' => 'How we work', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_fp_process_heading', 'label' => 'Heading', 'name' => 'process_heading', 'type' => 'text', 'default_value' => 'Four steps. Zero surprises.', 'wrapper' => array( 'width' => '60' ) ),
            array( 'key' => 'k_fp_process_description', 'label' => 'Description', 'name' => 'process_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'A predictable, transparent engagement flow — designed so you always know what is happening, what is next and what it costs.' ),
            array( 'key' => 'k_fp_process_steps', 'label' => 'Steps', 'name' => 'process_steps', 'type' => 'repeater', 'button_label' => 'Add step', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_fp_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'k_fp_step_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '70' ) ),
                ),
            ),

            array( 'key' => 'k_fp_tab_values', 'label' => 'Values', 'type' => 'tab' ),
            array( 'key' => 'k_fp_values_eyebrow', 'label' => 'Eyebrow', 'name' => 'values_eyebrow', 'type' => 'text', 'default_value' => 'Our values', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_fp_values_heading', 'label' => 'Heading', 'name' => 'values_heading', 'type' => 'text', 'default_value' => 'The principles behind every signature on our reports.', 'wrapper' => array( 'width' => '60' ) ),
            array( 'key' => 'k_fp_values_items',   'label' => 'Values', 'name' => 'values_items', 'type' => 'repeater', 'button_label' => 'Add value', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_fp_value_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'k_fp_value_icon',  'label' => 'Icon',  'name' => 'icon',  'type' => 'select', 'choices' => kingston_icon_choices(), 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'k_fp_value_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '50' ) ),
                ),
            ),

            array( 'key' => 'k_fp_tab_testimonials', 'label' => 'Testimonials', 'type' => 'tab' ),
            array( 'key' => 'k_fp_t_eyebrow', 'label' => 'Eyebrow', 'name' => 'testimonials_eyebrow', 'type' => 'text', 'default_value' => 'Client voices', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_fp_t_heading', 'label' => 'Heading', 'name' => 'testimonials_heading', 'type' => 'text', 'default_value' => 'What founders, CFOs and family offices say.', 'wrapper' => array( 'width' => '60' ) ),
            array( 'key' => 'k_fp_t_items',   'label' => 'Testimonials', 'name' => 'testimonials_items', 'type' => 'repeater', 'button_label' => 'Add testimonial', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_fp_t_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'k_fp_t_name',  'label' => 'Name',  'name' => 'name',  'type' => 'text', 'wrapper' => array( 'width' => '33' ) ),
                    array( 'key' => 'k_fp_t_role',  'label' => 'Role',  'name' => 'role',  'type' => 'text', 'wrapper' => array( 'width' => '33' ) ),
                    array( 'key' => 'k_fp_t_initials', 'label' => 'Initials (avatar)', 'name' => 'initials', 'type' => 'text', 'maxlength' => 3, 'wrapper' => array( 'width' => '34' ) ),
                ),
            ),
        ),
    ) );

    /* -----------------------------------------------------------------
     * 3. Service Detail — used by 12 service templates.
     *    Same shape as Free Zone Detail, minus the "fz facts" row.
     * ----------------------------------------------------------------- */
    $service_templates = array(
        'page-statutory-audit.php',
        'page-internal-audit.php',
        'page-forensic-audit.php',
        'page-due-diligence.php',
        'page-corporate-tax.php',
        'page-vat.php',
        'page-excise-tax.php',
        'page-accounting.php',
        'page-aml-compliance.php',
        'page-esr.php',
        'page-feasibility-studies.php',
        'page-free-zone.php',
        'page-mainland-setup.php',
        'page-offshore-setup.php',
        'page-pro-services.php',
    );
    $service_locations = array();
    foreach ( $service_templates as $tpl ) {
        $service_locations[] = array( array(
            'param' => 'page_template', 'operator' => '==', 'value' => $tpl,
        ) );
    }
    acf_add_local_field_group( array(
        'key'      => 'group_kingston_service_detail',
        'title'    => 'Service Detail — Kingston',
        'location' => $service_locations,
        'menu_order'  => 0,
        'position'    => 'normal',
        'style'       => 'default',
        'hide_on_screen' => array( 'the_content', 'discussion', 'comments', 'author' ),
        'fields'   => kingston_detail_fields( false ),
    ) );

    /* -----------------------------------------------------------------
     * 4. Free Zone Detail — same shape + "fz_facts" row.
     * ----------------------------------------------------------------- */
    $fz_templates = array(
        'page-free-zone-dmcc.php',
        'page-free-zone-jafza.php',
        'page-free-zone-difc.php',
        'page-free-zone-dafza.php',
        'page-free-zone-ifza.php',
        'page-free-zone-meydan.php',
        'page-free-zone-adgm.php',
        'page-free-zone-rakez.php',
        'page-free-zone-shams.php',
    );
    $fz_locations = array();
    foreach ( $fz_templates as $tpl ) {
        $fz_locations[] = array( array(
            'param' => 'page_template', 'operator' => '==', 'value' => $tpl,
        ) );
    }
    acf_add_local_field_group( array(
        'key'      => 'group_kingston_freezone_detail',
        'title'    => 'Free Zone Detail — Kingston',
        'location' => $fz_locations,
        'menu_order'  => 0,
        'position'    => 'normal',
        'style'       => 'default',
        'hide_on_screen' => array( 'the_content', 'discussion', 'comments', 'author' ),
        'fields'   => kingston_detail_fields( true ),
    ) );

    /* -----------------------------------------------------------------
     * 5. Services Overview (page-services.php)
     * ----------------------------------------------------------------- */
    acf_add_local_field_group( array(
        'key'      => 'group_kingston_services_overview',
        'title'    => 'Services Overview — Kingston',
        'location' => array( array( array(
            'param' => 'page_template', 'operator' => '==', 'value' => 'page-services.php',
        ) ) ),
        'hide_on_screen' => array( 'the_content', 'discussion', 'comments', 'author' ),
        'fields' => array(
            array( 'key' => 'k_so_header_eyebrow', 'label' => 'Page header — eyebrow', 'name' => 'page_eyebrow', 'type' => 'text', 'default_value' => 'Our services' ),
            array( 'key' => 'k_so_header_heading', 'label' => 'Page header — heading', 'name' => 'page_heading', 'type' => 'text', 'default_value' => 'Audit, tax, advisory & compliance — under one trusted Dubai roof.' ),
            array( 'key' => 'k_so_header_intro',   'label' => 'Page header — intro',   'name' => 'page_intro',   'type' => 'textarea', 'rows' => 2, 'default_value' => 'From statutory audit to forensic investigations, corporate tax to ESR, every Kingston service is designed around one promise: rigorous work, clear counsel, on time.' ),
            array( 'key' => 'k_so_categories', 'label' => 'Service categories', 'name' => 'categories', 'type' => 'repeater', 'button_label' => 'Add category', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_so_cat_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'k_so_cat_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text', 'wrapper' => array( 'width' => '70' ) ),
                    array( 'key' => 'k_so_cat_bg',      'label' => 'Background style', 'name' => 'background', 'type' => 'select', 'choices' => array( '' => 'Default', 'bg-bone' => 'Bone (light)' ), 'default_value' => '' ),
                    array( 'key' => 'k_so_cat_items',   'label' => 'Cards', 'name' => 'cards', 'type' => 'repeater', 'button_label' => 'Add card', 'layout' => 'block',
                        'sub_fields' => array(
                            array( 'key' => 'k_so_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                            array( 'key' => 'k_so_card_link',  'label' => 'Link',  'name' => 'link',  'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                            array( 'key' => 'k_so_card_icon',  'label' => 'Icon',  'name' => 'icon',  'type' => 'select', 'choices' => kingston_icon_choices(), 'wrapper' => array( 'width' => '20' ) ),
                            array( 'key' => 'k_so_card_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                            array( 'key' => 'k_so_card_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array' ),
                        ),
                    ),
                ),
            ),
            array( 'key' => 'k_so_process_eyebrow', 'label' => 'How we work — eyebrow', 'name' => 'process_eyebrow', 'type' => 'text', 'default_value' => 'How we work' ),
            array( 'key' => 'k_so_process_heading', 'label' => 'How we work — heading', 'name' => 'process_heading', 'type' => 'text', 'default_value' => 'A predictable, transparent engagement flow.' ),
            array( 'key' => 'k_so_process_steps',   'label' => 'How we work — steps',   'name' => 'process_steps', 'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_so_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'k_so_step_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
    ) );

    /* -----------------------------------------------------------------
     * 6. Free Zones Overview (page-freezones.php)
     * ----------------------------------------------------------------- */
    acf_add_local_field_group( array(
        'key'      => 'group_kingston_freezones_overview',
        'title'    => 'Free Zones Overview — Kingston',
        'location' => array( array( array(
            'param' => 'page_template', 'operator' => '==', 'value' => 'page-freezones.php',
        ) ) ),
        'hide_on_screen' => array( 'the_content', 'discussion', 'comments', 'author' ),
        'fields' => array(
            array( 'key' => 'k_fzo_eyebrow', 'label' => 'Page eyebrow', 'name' => 'page_eyebrow', 'type' => 'text', 'default_value' => 'Free Zone Setup' ),
            array( 'key' => 'k_fzo_heading', 'label' => 'Page heading', 'name' => 'page_heading', 'type' => 'text', 'default_value' => 'Pick your UAE Free Zone. We will handle the rest.' ),
            array( 'key' => 'k_fzo_intro',   'label' => 'Page intro',   'name' => 'page_intro',   'type' => 'textarea', 'rows' => 2, 'default_value' => 'Kingston is registered with all major UAE Free Zones — and we set up, audit and run tax for businesses inside them. Compare zones below, then pick the page that fits your business.' ),

            array( 'key' => 'k_fzo_section_eyebrow', 'label' => 'Grid eyebrow', 'name' => 'grid_eyebrow', 'type' => 'text', 'default_value' => 'Choose your zone' ),
            array( 'key' => 'k_fzo_section_heading', 'label' => 'Grid heading', 'name' => 'grid_heading', 'type' => 'text', 'default_value' => 'Nine UAE Free Zones. One trusted partner.' ),
            array( 'key' => 'k_fzo_section_intro',   'label' => 'Grid intro',   'name' => 'grid_intro',   'type' => 'textarea', 'rows' => 2, 'default_value' => 'Each zone has its own regulator, activity list, cost profile and renewal regime. We help you pick the one that actually fits your business — not just the one we earn the most on.' ),
            array( 'key' => 'k_fzo_cards',   'label' => 'Free Zone cards', 'name' => 'fz_cards', 'type' => 'repeater', 'button_label' => 'Add zone', 'layout' => 'block',
                'sub_fields' => kingston_fz_card_subfields(),
            ),

            array( 'key' => 'k_fzo_choose_eyebrow', 'label' => 'Decision tree — eyebrow', 'name' => 'choose_eyebrow', 'type' => 'text', 'default_value' => 'How to choose' ),
            array( 'key' => 'k_fzo_choose_heading', 'label' => 'Decision tree — heading', 'name' => 'choose_heading', 'type' => 'text', 'default_value' => 'The 60-second decision tree.' ),
            array( 'key' => 'k_fzo_choose_items', 'label' => 'Decision tree items', 'name' => 'choose_items', 'type' => 'repeater', 'button_label' => 'Add', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_fzo_choose_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'k_fzo_choose_a', 'label' => 'Answer (HTML allowed)', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
            array( 'key' => 'k_fzo_choose_footer', 'label' => 'Decision tree — footer (HTML allowed)', 'name' => 'choose_footer', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Still not sure? <a href="contact" style="color:var(--gold-700);font-weight:600">Book a free 30-minute call</a> — we will recommend in writing.' ),

            array( 'key' => 'k_fzo_steps_eyebrow', 'label' => 'Steps eyebrow', 'name' => 'steps_eyebrow', 'type' => 'text', 'default_value' => 'What you get' ),
            array( 'key' => 'k_fzo_steps_heading', 'label' => 'Steps heading', 'name' => 'steps_heading', 'type' => 'text', 'default_value' => 'End-to-end Free Zone setup, with audit and tax built in.' ),
            array( 'key' => 'k_fzo_steps_items',   'label' => 'Steps',         'name' => 'steps_items', 'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_fzo_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'k_fzo_step_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
    ) );

    /* -----------------------------------------------------------------
     * 7. About page
     * ----------------------------------------------------------------- */
    acf_add_local_field_group( array(
        'key'      => 'group_kingston_about',
        'title'    => 'About Page — Kingston',
        'location' => array( array( array(
            'param' => 'page_template', 'operator' => '==', 'value' => 'page-about.php',
        ) ) ),
        'hide_on_screen' => array( 'the_content', 'discussion', 'comments', 'author' ),
        'fields' => array(
            array( 'key' => 'k_ab_eyebrow', 'label' => 'Page eyebrow', 'name' => 'page_eyebrow', 'type' => 'text', 'default_value' => 'About Kingston' ),
            array( 'key' => 'k_ab_heading', 'label' => 'Page heading', 'name' => 'page_heading', 'type' => 'text', 'default_value' => 'A boutique UAE firm built for clients who want senior judgement on every page of their report.' ),
            array( 'key' => 'k_ab_intro',   'label' => 'Page intro',   'name' => 'page_intro',   'type' => 'textarea', 'rows' => 2, 'default_value' => 'We exist to be the audit, tax and advisory partner that ambitious UAE businesses can actually trust — accessible to founders and rigorous enough for boards.' ),
            array( 'key' => 'k_ab_story_eyebrow', 'label' => 'Story — eyebrow', 'name' => 'story_eyebrow', 'type' => 'text', 'default_value' => 'Our story' ),
            array( 'key' => 'k_ab_story_heading', 'label' => 'Story — heading', 'name' => 'story_heading', 'type' => 'text', 'default_value' => 'Born in Dubai. Built for the UAE\'s most demanding finance leaders.' ),
            array( 'key' => 'k_ab_story_body',    'label' => 'Story — body (paragraphs separated by blank lines)', 'name' => 'story_body', 'type' => 'textarea', 'rows' => 8, 'default_value' => "Kingston Chartered Auditing & Advisory was founded by a team of senior chartered accountants who had spent careers inside the Big Four — and who believed UAE businesses deserved the same technical rigour without the slow, transactional service.\n\nFrom a single office on Sheikh Zayed Road, we have grown into a trusted partner to hundreds of UAE companies — from family-owned trading houses to fast-scaling tech firms and family offices. The work is the same, regardless of size: clean numbers, clear advice, no surprises." ),
            array( 'key' => 'k_ab_seal_text', 'label' => 'Seal text (HTML)', 'name' => 'seal_text', 'type' => 'text', 'default_value' => 'EST.', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_ab_seal_sub',  'label' => 'Seal sub-text',  'name' => 'seal_sub',  'type' => 'text', 'default_value' => 'Kingston Dubai', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_ab_badge_big', 'label' => 'Badge big text',  'name' => 'badge_big',  'type' => 'text', 'default_value' => 'A+', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_ab_badge_lbl', 'label' => 'Badge label',     'name' => 'badge_label','type' => 'text', 'default_value' => 'Audit Quality Rating', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_ab_story_btn_label', 'label' => 'Story button — label', 'name' => 'story_btn_label', 'type' => 'text', 'default_value' => 'Talk to a partner', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'k_ab_story_btn_link',  'label' => 'Story button — link',  'name' => 'story_btn_link',  'type' => 'text', 'default_value' => 'contact', 'wrapper' => array( 'width' => '50' ) ),

            array( 'key' => 'k_ab_mv_eyebrow', 'label' => 'Mission/Vision eyebrow', 'name' => 'mv_eyebrow', 'type' => 'text', 'default_value' => 'Mission & Vision' ),
            array( 'key' => 'k_ab_mv_heading', 'label' => 'Mission/Vision heading', 'name' => 'mv_heading', 'type' => 'text', 'default_value' => 'Quietly raising the bar for audit and advisory in the UAE.' ),
            array( 'key' => 'k_ab_mission_title', 'label' => 'Mission title', 'name' => 'mission_title', 'type' => 'text', 'default_value' => 'Our Mission' ),
            array( 'key' => 'k_ab_mission_body',  'label' => 'Mission body',  'name' => 'mission_body',  'type' => 'textarea', 'rows' => 3, 'default_value' => 'To deliver audit, tax and advisory work of uncompromising quality — making compliance a strategic advantage, not a cost.' ),
            array( 'key' => 'k_ab_vision_title',  'label' => 'Vision title',  'name' => 'vision_title',  'type' => 'text', 'default_value' => 'Our Vision' ),
            array( 'key' => 'k_ab_vision_body',   'label' => 'Vision body',   'name' => 'vision_body',   'type' => 'textarea', 'rows' => 3, 'default_value' => 'To be one of the UAE\'s most trusted audit, tax and advisory firms — recognised for integrity, technical excellence and financial transparency.' ),

            array( 'key' => 'k_ab_values_eyebrow', 'label' => 'Values — eyebrow', 'name' => 'values_eyebrow', 'type' => 'text', 'default_value' => 'Our values' ),
            array( 'key' => 'k_ab_values_heading', 'label' => 'Values — heading', 'name' => 'values_heading', 'type' => 'text', 'default_value' => 'The principles behind every signature on our reports.' ),
            array( 'key' => 'k_ab_values_items', 'label' => 'Values', 'name' => 'values_items', 'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_ab_v_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'k_ab_v_icon',  'label' => 'Icon',  'name' => 'icon',  'type' => 'select', 'choices' => kingston_icon_choices(), 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'k_ab_v_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '50' ) ),
                ),
            ),

            array( 'key' => 'k_ab_stats_eyebrow', 'label' => 'Stats — eyebrow', 'name' => 'stats_eyebrow', 'type' => 'text', 'default_value' => 'By the numbers' ),
            array( 'key' => 'k_ab_stats_heading', 'label' => 'Stats — heading', 'name' => 'stats_heading', 'type' => 'text', 'default_value' => 'A track record measured in client trust.' ),
            array( 'key' => 'k_ab_stats_items',   'label' => 'Stats',           'name' => 'stats_items', 'type' => 'repeater', 'layout' => 'table',
                'sub_fields' => array(
                    array( 'key' => 'k_ab_s_num',    'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'k_ab_s_suffix', 'label' => 'Suffix', 'name' => 'suffix', 'type' => 'text' ),
                    array( 'key' => 'k_ab_s_label',  'label' => 'Label',  'name' => 'label',  'type' => 'text' ),
                ),
            ),

            array( 'key' => 'k_ab_lead_eyebrow', 'label' => 'Leadership eyebrow', 'name' => 'leadership_eyebrow', 'type' => 'text', 'default_value' => 'Leadership' ),
            array( 'key' => 'k_ab_lead_heading', 'label' => 'Leadership heading', 'name' => 'leadership_heading', 'type' => 'text', 'default_value' => 'Senior, hands-on, and accessible.' ),
            array( 'key' => 'k_ab_lead_intro',   'label' => 'Leadership intro',   'name' => 'leadership_intro',   'type' => 'textarea', 'rows' => 2, 'default_value' => 'Every Kingston engagement is led by a partner — not a junior. The people who pitch you are the people who do the work.' ),
            array( 'key' => 'k_ab_lead_items',   'label' => 'Team members',       'name' => 'leadership_items', 'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_ab_l_initials', 'label' => 'Initials', 'name' => 'initials', 'type' => 'text', 'maxlength' => 3, 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'k_ab_l_name',     'label' => 'Name',     'name' => 'name',     'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'k_ab_l_role',     'label' => 'Role',     'name' => 'role',     'type' => 'text', 'wrapper' => array( 'width' => '45' ) ),
                    array( 'key' => 'k_ab_l_bio',      'label' => 'Bio',      'name' => 'bio',      'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'k_ab_l_photo',    'label' => 'Photo (optional)', 'name' => 'photo', 'type' => 'image', 'return_format' => 'array' ),
                ),
            ),
        ),
    ) );

    /* -----------------------------------------------------------------
     * 8. Contact page
     * ----------------------------------------------------------------- */
    acf_add_local_field_group( array(
        'key'      => 'group_kingston_contact',
        'title'    => 'Contact Page — Kingston',
        'location' => array( array( array(
            'param' => 'page_template', 'operator' => '==', 'value' => 'page-contact.php',
        ) ) ),
        'hide_on_screen' => array( 'the_content', 'discussion', 'comments', 'author' ),
        'fields' => array(
            array( 'key' => 'k_ct_eyebrow', 'label' => 'Page eyebrow', 'name' => 'page_eyebrow', 'type' => 'text', 'default_value' => 'Contact us' ),
            array( 'key' => 'k_ct_heading', 'label' => 'Page heading', 'name' => 'page_heading', 'type' => 'text', 'default_value' => 'Talk to a partner. Today.' ),
            array( 'key' => 'k_ct_intro',   'label' => 'Page intro',   'name' => 'page_intro',   'type' => 'textarea', 'rows' => 2, 'default_value' => 'Tell us about your business and the help you need. We will be in touch within one business day to scope the engagement, the timeline and the fee — clearly, in writing.' ),

            array( 'key' => 'k_ct_address_label',     'label' => 'Office tile — heading',     'name' => 'address_label',     'type' => 'text', 'default_value' => 'Office', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'k_ct_address_body',      'label' => 'Office tile — body (HTML)', 'name' => 'address_body',      'type' => 'textarea', 'rows' => 3, 'default_value' => "Office 203, Aspin Commercial Tower<br />Street 104, Trade Centre First<br />Sheikh Zayed Road, Dubai, UAE", 'wrapper' => array( 'width' => '70' ) ),
            array( 'key' => 'k_ct_phone_label',       'label' => 'Phone — heading', 'name' => 'phone_label', 'type' => 'text', 'default_value' => 'Phone', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'k_ct_phone_number',      'label' => 'Phone — number',  'name' => 'phone_number','type' => 'text', 'default_value' => '+971 50 874 7098', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_ct_phone_hours',       'label' => 'Phone — hours',   'name' => 'phone_hours', 'type' => 'text', 'default_value' => 'Sun–Thu, 9:00 – 18:00 GST', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'k_ct_email_label',       'label' => 'Email — heading', 'name' => 'email_label', 'type' => 'text', 'default_value' => 'Email', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'k_ct_email_addr',        'label' => 'Email — address', 'name' => 'email_addr',  'type' => 'email','default_value' => 'info@kingstonca.com', 'wrapper' => array( 'width' => '40' ) ),
            array( 'key' => 'k_ct_email_note',        'label' => 'Email — note',    'name' => 'email_note',  'type' => 'text', 'default_value' => 'We reply within one business day', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'k_ct_hours_label',       'label' => 'Hours — heading', 'name' => 'hours_label', 'type' => 'text', 'default_value' => 'Hours', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'k_ct_hours_body',        'label' => 'Hours — body (HTML)', 'name' => 'hours_body', 'type' => 'textarea', 'rows' => 2, 'default_value' => "Sunday – Thursday<br />9:00 AM – 6:00 PM (GST)", 'wrapper' => array( 'width' => '70' ) ),

            array( 'key' => 'k_ct_form_heading', 'label' => 'Form — heading',      'name' => 'form_heading', 'type' => 'text', 'default_value' => 'Tell us about your project' ),
            array( 'key' => 'k_ct_form_subhead', 'label' => 'Form — subheading',   'name' => 'form_subhead', 'type' => 'text', 'default_value' => 'Free, confidential, 30-minute consultation with a Kingston partner.' ),
            array( 'key' => 'k_ct_form_button',  'label' => 'Form — submit label', 'name' => 'form_button',  'type' => 'text', 'default_value' => 'Request consultation' ),
            array( 'key' => 'k_ct_form_consent', 'label' => 'Form — consent line', 'name' => 'form_consent', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'By submitting, you agree that Kingston may contact you about your enquiry. We do not share your details with third parties.' ),
            array( 'key' => 'k_ct_form_shortcode', 'label' => 'Form — shortcode (e.g. CF7)', 'name' => 'form_shortcode', 'type' => 'text', 'instructions' => 'Optional. If set, replaces the built-in static form.' ),
            array( 'key' => 'k_ct_form_services',  'label' => 'Form — service options', 'name' => 'form_services', 'type' => 'repeater', 'layout' => 'table',
                'sub_fields' => array(
                    array( 'key' => 'k_ct_form_svc_label', 'label' => 'Option label', 'name' => 'label', 'type' => 'text' ),
                ),
            ),

            array( 'key' => 'k_ct_map_eyebrow', 'label' => 'Map — eyebrow', 'name' => 'map_eyebrow', 'type' => 'text', 'default_value' => 'Find us' ),
            array( 'key' => 'k_ct_map_heading', 'label' => 'Map — heading', 'name' => 'map_heading', 'type' => 'text', 'default_value' => 'Sheikh Zayed Road, Dubai.' ),
            array( 'key' => 'k_ct_map_intro',   'label' => 'Map — intro',   'name' => 'map_intro',   'type' => 'textarea', 'rows' => 2, 'default_value' => 'A short walk from World Trade Centre Metro Station — visitor parking available in the building.' ),
            array( 'key' => 'k_ct_map_iframe',  'label' => 'Map — iframe URL', 'name' => 'map_iframe', 'type' => 'url',  'default_value' => 'https://www.google.com/maps?q=Aspin+Commercial+Tower,+Sheikh+Zayed+Road,+Dubai&output=embed' ),

            array( 'key' => 'k_ct_faq_eyebrow', 'label' => 'FAQ — eyebrow', 'name' => 'faq_eyebrow', 'type' => 'text', 'default_value' => 'FAQ' ),
            array( 'key' => 'k_ct_faq_heading', 'label' => 'FAQ — heading', 'name' => 'faq_heading', 'type' => 'text', 'default_value' => 'Common questions, answered.' ),
            array( 'key' => 'k_ct_faq_items',   'label' => 'FAQ items',     'name' => 'faq_items',   'type' => 'repeater', 'layout' => 'block',
                'sub_fields' => array(
                    array( 'key' => 'k_ct_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'k_ct_faq_a', 'label' => 'Answer (HTML allowed)', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
    ) );

    /* -----------------------------------------------------------------
     * 9. Business Setup overview (page-business-setup.php)
     *    Business-setup is structured like a Service Detail too — handled by
     *    the Service Detail group above. No extra registration needed.
     * ----------------------------------------------------------------- */

}

/* =====================================================================
 * Helpers used while registering field groups
 * ===================================================================== */

/** Subfields shared between front-page FZ grid and freezones overview grid. */
function kingston_fz_card_subfields() {
    return array(
        array( 'key' => 'k_fz_emirate',  'label' => 'Emirate / strapline', 'name' => 'emirate', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
        array( 'key' => 'k_fz_short',    'label' => 'Short name',  'name' => 'short_name', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
        array( 'key' => 'k_fz_full',     'label' => 'Full name',   'name' => 'full_name',  'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
        array( 'key' => 'k_fz_tagline',  'label' => 'Tagline',     'name' => 'tagline',    'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'k_fz_tags',     'label' => 'Tags',        'name' => 'tags', 'type' => 'repeater', 'layout' => 'table',
            'sub_fields' => array( array( 'key' => 'k_fz_tag_text', 'label' => 'Tag', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'k_fz_image',    'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array' ),
        array( 'key' => 'k_fz_link',     'label' => 'Link (slug or URL)', 'name' => 'link', 'type' => 'text' ),
        array( 'key' => 'k_fz_read',     'label' => 'Read-more label', 'name' => 'read_label', 'type' => 'text', 'default_value' => 'Setup details' ),
    );
}

/** Subfields shared by Service Detail and Free Zone Detail field groups. */
function kingston_detail_fields( $is_freezone = false ) {
    $fields = array(
        array( 'key' => 'k_d_tab_header', 'label' => 'Page header', 'type' => 'tab' ),
        array( 'key' => 'k_d_breadcrumb', 'label' => 'Breadcrumb label', 'name' => 'breadcrumb', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
        array( 'key' => 'k_d_eyebrow',    'label' => 'Eyebrow', 'name' => 'page_eyebrow', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
        array( 'key' => 'k_d_heading',    'label' => 'Heading', 'name' => 'page_heading', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
        array( 'key' => 'k_d_intro',      'label' => 'Intro paragraph', 'name' => 'page_intro', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'k_d_banner',     'label' => 'Banner image',    'name' => 'banner_image', 'type' => 'image', 'return_format' => 'array' ),
        array( 'key' => 'k_d_banner_alt', 'label' => 'Banner alt text', 'name' => 'banner_alt', 'type' => 'text' ),

        array( 'key' => 'k_d_tab_overview', 'label' => 'Overview', 'type' => 'tab' ),
        array( 'key' => 'k_d_ov_eyebrow',   'label' => 'Overview eyebrow', 'name' => 'overview_eyebrow', 'type' => 'text', 'default_value' => 'Overview' ),
        array( 'key' => 'k_d_ov_heading',   'label' => 'Overview heading', 'name' => 'overview_heading', 'type' => 'text' ),
        array( 'key' => 'k_d_ov_body',      'label' => 'Overview body (paragraphs separated by blank lines)', 'name' => 'overview_body', 'type' => 'textarea', 'rows' => 8 ),
    );

    if ( $is_freezone ) {
        $fields[] = array( 'key' => 'k_d_fz_facts', 'label' => 'Free zone facts (4 expected)', 'name' => 'fz_facts', 'type' => 'repeater', 'layout' => 'table',
            'sub_fields' => array(
                array( 'key' => 'k_d_fz_fact_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                array( 'key' => 'k_d_fz_fact_value', 'label' => 'Value', 'name' => 'value', 'type' => 'text' ),
            ),
        );
    }

    $fields = array_merge( $fields, array(
        array( 'key' => 'k_d_includes_heading', 'label' => '"What is included" heading', 'name' => 'includes_heading', 'type' => 'text', 'default_value' => 'What is included' ),
        array( 'key' => 'k_d_includes_items',   'label' => '"What is included" items',  'name' => 'includes_items', 'type' => 'repeater', 'layout' => 'block',
            'sub_fields' => array(
                array( 'key' => 'k_d_inc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'k_d_inc_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ),
        ),
        array( 'key' => 'k_d_why_heading', 'label' => '"Why clients choose Kingston" heading', 'name' => 'why_heading', 'type' => 'text', 'default_value' => 'Why clients choose Kingston' ),
        array( 'key' => 'k_d_why_items',   'label' => '"Why" items', 'name' => 'why_items', 'type' => 'repeater', 'layout' => 'block',
            'sub_fields' => array(
                array( 'key' => 'k_d_why_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'k_d_why_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ),
        ),

        array( 'key' => 'k_d_tab_aside', 'label' => 'Sidebar', 'type' => 'tab' ),
        array( 'key' => 'k_d_aside_heading', 'label' => 'Sidebar — heading', 'name' => 'aside_heading', 'type' => 'text', 'default_value' => 'Talk to a partner' ),
        array( 'key' => 'k_d_aside_body',    'label' => 'Sidebar — body',    'name' => 'aside_body',    'type' => 'textarea', 'rows' => 3, 'default_value' => 'Free, confidential, 30 minutes. We will tell you whether we can help and what it will cost.' ),
        array( 'key' => 'k_d_aside_btn',     'label' => 'Sidebar — button label', 'name' => 'aside_btn_label', 'type' => 'text', 'default_value' => 'Book consultation', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'k_d_aside_link',    'label' => 'Sidebar — button link',  'name' => 'aside_btn_link',  'type' => 'text', 'default_value' => 'contact', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'k_d_related_heading', 'label' => 'Related links — heading', 'name' => 'related_heading', 'type' => 'text', 'default_value' => $is_freezone ? 'Other UAE Free Zones' : 'Other services' ),
        array( 'key' => 'k_d_related_items',   'label' => 'Related links',           'name' => 'related_items',   'type' => 'repeater', 'layout' => 'table',
            'sub_fields' => array(
                array( 'key' => 'k_d_rel_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                array( 'key' => 'k_d_rel_link',  'label' => 'Link',  'name' => 'link',  'type' => 'text' ),
                array( 'key' => 'k_d_rel_view_all', 'label' => 'Style as "View all"', 'name' => 'view_all', 'type' => 'true_false', 'ui' => 1 ),
            ),
        ),

        array( 'key' => 'k_d_tab_process', 'label' => 'Process', 'type' => 'tab' ),
        array( 'key' => 'k_d_proc_eyebrow', 'label' => 'Process eyebrow', 'name' => 'process_eyebrow', 'type' => 'text', 'default_value' => $is_freezone ? 'Process' : 'Our process', 'wrapper' => array( 'width' => '40' ) ),
        array( 'key' => 'k_d_proc_heading', 'label' => 'Process heading', 'name' => 'process_heading', 'type' => 'text', 'wrapper' => array( 'width' => '60' ) ),
        array( 'key' => 'k_d_proc_steps',   'label' => 'Steps',           'name' => 'process_steps',   'type' => 'repeater', 'layout' => 'block',
            'sub_fields' => array(
                array( 'key' => 'k_d_proc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'k_d_proc_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ),
        ),

        array( 'key' => 'k_d_tab_faq', 'label' => 'FAQ', 'type' => 'tab' ),
        array( 'key' => 'k_d_faq_eyebrow', 'label' => 'FAQ eyebrow', 'name' => 'faq_eyebrow', 'type' => 'text', 'default_value' => 'FAQ', 'wrapper' => array( 'width' => '40' ) ),
        array( 'key' => 'k_d_faq_heading', 'label' => 'FAQ heading', 'name' => 'faq_heading', 'type' => 'text', 'wrapper' => array( 'width' => '60' ) ),
        array( 'key' => 'k_d_faq_items',   'label' => 'FAQ items',  'name' => 'faq_items',   'type' => 'repeater', 'layout' => 'block',
            'sub_fields' => array(
                array( 'key' => 'k_d_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'k_d_faq_a', 'label' => 'Answer (HTML allowed)', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),
    ) );

    return $fields;
}

/** Catalogue of inline SVG icon choices for select fields. */
function kingston_icon_choices() {
    return array(
        'check'      => 'Checkmark',
        'document'   => 'Document',
        'clock'      => 'Clock',
        'search'     => 'Search',
        'shield'     => 'Shield',
        'building'   => 'Building / city',
        'bars'       => 'Bar chart',
        'phone'      => 'Phone',
        'mail'       => 'Mail',
        'pin'        => 'Map pin',
        'globe'      => 'Globe',
        'star'       => 'Star',
        'users'      => 'Users',
        'lock'       => 'Lock',
        'sun'        => 'Sun / innovation',
        'percent'    => 'Percent',
        'cog'        => 'Cog',
        'chart'      => 'Line chart',
        'home'       => 'Home',
        'currency'   => 'Currency',
        'trending'   => 'Trending up',
    );
}
