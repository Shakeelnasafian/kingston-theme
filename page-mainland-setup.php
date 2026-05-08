<?php
/**
 * Template Name: Mainland Setup
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Mainland Setup',
    'page_eyebrow' => 'Business Setup',
    'page_heading' => 'Mainland setup, end to end. Without the runaround.',
    'page_intro'   => 'Mainland licences let you trade directly with the UAE local market, take on government contracts, and open multiple physical locations — Kingston handles the full setup, then stays on as your auditor and tax advisor.',
    'banner_image' => kingston_asset( 'img/services/mainland-setup.svg' ),
    'banner_alt'   => 'Mainland Setup — Kingston',

    'overview_heading' => 'Mainland Setup in the UAE — done right.',
    'overview_body'    => "UAE Mainland is the right choice when your customers are inside the UAE — local consumers, local businesses, and the government tender market. Mainland licences are issued by the Department of Economic Development (DED) of each emirate, and unlike Free Zones, allow you to trade across the country without a distributor.\n\nRecent reforms now allow 100% foreign ownership for most commercial and professional activities — meaning Mainland is no longer a \"sponsor required\" jurisdiction in most cases. Kingston handles the full setup process and stays on for the ongoing audit, tax and compliance work that follows.",

    'includes_items' => array(
        array( 'title' => 'DED trade licence',                  'description' => 'Activity selection, name approval, initial approval, MoA drafting, and final licence issuance.' ),
        array( 'title' => '100% foreign ownership',             'description' => 'Where eligible, structured as a sole-shareholder LLC with full foreign ownership — no UAE national required.' ),
        array( 'title' => 'Office & Ejari',                     'description' => 'Tenancy contract, Ejari registration and licence-linked physical address.' ),
        array( 'title' => 'Immigration & establishment cards',  'description' => 'Issued post-licence to enable visa quotas and employee onboarding.' ),
        array( 'title' => 'Visa quotas',                        'description' => 'Investor, partner, employee and family visas — quota tied to office space.' ),
        array( 'title' => 'Banking introductions',              'description' => 'Curated introductions to UAE banks with experience in your activity and structure.' ),
    ),
    'why_items' => array(
        array( 'title' => 'One firm, end to end',     'description' => 'Setup, audit, tax, accounting — all under one engagement letter. No third-party hand-offs.' ),
        array( 'title' => 'Plain-English advice',     'description' => 'We will tell you when Mainland is wrong for your business — and recommend Free Zone or Offshore instead.' ),
        array( 'title' => 'Fixed scope, fixed fees',  'description' => 'Setup costs and timelines agreed in writing before any government fee is paid.' ),
        array( 'title' => 'Audit-ready from day one', 'description' => 'Books, controls and tax position set up correctly at the start — saving years of cleanup later.' ),
    ),
    'related_items' => array(
        array( 'label' => 'Statutory Audit', 'link' => 'statutory-audit' ),
        array( 'label' => 'Internal Audit',  'link' => 'internal-audit' ),
        array( 'label' => 'Forensic Audit',  'link' => 'forensic-audit' ),
        array( 'label' => 'Free Zone Audit', 'link' => 'free-zone' ),
        array( 'label' => 'Due Diligence',   'link' => 'due-diligence' ),
        array( 'label' => 'Corporate Tax',   'link' => 'corporate-tax' ),
        array( 'label' => 'View all services', 'link' => 'services', 'view_all' => true ),
    ),

    'process_heading' => 'How a mainland setup engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Discovery & structuring', 'description' => 'Activity, ownership, office and visa needs mapped to the right Mainland structure (LLC, sole establishment, branch, professional licence).' ),
        array( 'title' => 'Initial approval & name', 'description' => 'Trade name reservation and DED initial approval — typically 2–5 working days.' ),
        array( 'title' => 'Office & MoA',            'description' => 'Lease + Ejari finalised, MoA drafted and notarised, and licence fees paid.' ),
        array( 'title' => 'Licence, visas & bank',   'description' => 'DED licence issued, immigration card processed, investor/employee visas applied for, and bank account opened.' ),
    ),
    'faq_heading' => 'Common questions about mainland setup.',
    'faq_items'   => array(
        array( 'question' => 'Can I have 100% foreign ownership in a Mainland LLC?', 'answer' => 'For the vast majority of commercial and professional activities, yes — recent reforms removed the historic 51% UAE national requirement. A small list of strategic activities still require local participation. We confirm at engagement.' ),
        array( 'question' => 'Mainland or Free Zone — which is right for me?', 'answer' => 'If your customers are largely inside the UAE, or if you need access to government contracts, Mainland is typically right. If your customers are international or you need a sector-specific regulator, Free Zone is usually better.' ),
        array( 'question' => 'How long does Mainland setup take?', 'answer' => 'From start to issued licence, typical Mainland setup runs 2–4 weeks. Bank account opening and visa processing add another 3–6 weeks on top.' ),
        array( 'question' => 'Do I need an Ejari?', 'answer' => 'Yes — Mainland licences require a registered tenancy contract (Ejari). Kingston coordinates this as part of the setup process.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
