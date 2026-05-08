<?php
/**
 * Template Name: VAT Services
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'VAT Services',
    'page_eyebrow' => 'Tax & Compliance',
    'page_heading' => 'VAT, handled. So you can focus on the business.',
    'page_intro'   => 'Comprehensive VAT services that help UAE businesses navigate VAT regulations, ensure compliance and optimise tax efficiency.',
    'banner_image' => kingston_asset( 'img/services/vat.svg' ),
    'banner_alt'   => 'VAT Services — Kingston',

    'overview_heading' => 'VAT Services in the UAE — done right.',
    'overview_body'    => "VAT seems simple — until your first refund is rejected, an input claim is denied on a technicality, or the FTA opens an audit and asks for two years of supporting documents in fourteen days.\n\nKingston handles the full VAT lifecycle for UAE businesses: registration, return preparation, refunds, audits and disputes. We bring senior FTA-experienced specialists to engagements small enough that most firms would assign a junior.",

    'includes_items' => array(
        array( 'title' => 'VAT registration & deregistration',         'description' => 'Mandatory and voluntary registration, group registration, and clean deregistration when activities cease.' ),
        array( 'title' => 'Quarterly & monthly return preparation',    'description' => 'Accurate, on-time return filing with full supporting workpapers and reconciliation to your accounting system.' ),
        array( 'title' => 'VAT refund recovery',                       'description' => 'Specialised support for tourist scheme, UAE national home-builder and business refund applications.' ),
        array( 'title' => 'VAT health checks',                         'description' => 'A pre-audit diagnostic — where the FTA would find issues, before they do.' ),
        array( 'title' => 'VAT audits & FTA representation',           'description' => 'Full handling of FTA audits, clarifications, objections and reconsideration requests.' ),
        array( 'title' => 'Industry-specific advisory',                'description' => 'Real estate, e-commerce, free zones, designated zones, financial services — VAT treatment is rarely vanilla.' ),
    ),
    'why_items' => array(
        array( 'title' => 'FTA-experienced team',           'description' => 'Specialists who have stood in front of FTA auditors many times — and know exactly what they ask for.' ),
        array( 'title' => 'Documentation done properly',    'description' => 'Workpapers and supporting files that survive an audit five years later.' ),
        array( 'title' => 'Refund recovery focus',          'description' => 'We push every refund claim that is genuinely available — and document them to win.' ),
        array( 'title' => 'Clear, fixed fees',              'description' => 'Monthly subscriptions or fixed-fee project work. No bill shocks at year-end.' ),
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

    'process_heading' => 'How a VAT services engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'VAT diagnostic',    'description' => 'Review of registrations, treatments and historic returns to spot risk and refund opportunities.' ),
        array( 'title' => 'Compliance setup',  'description' => 'Chart of accounts, tax codes, supplier & customer master, invoice templates — VAT-correct from day one.' ),
        array( 'title' => 'Return cycle',      'description' => 'Monthly or quarterly preparation, review and filing — with documentation kept ready for any FTA request.' ),
        array( 'title' => 'Audit & defence',   'description' => 'Where the FTA enquires, we lead the response, prepare the file, and represent you through to closure.' ),
    ),
    'faq_heading' => 'Common questions about VAT services.',
    'faq_items'   => array(
        array( 'question' => 'When is VAT registration mandatory?', 'answer' => 'Mandatory registration applies once your taxable supplies and imports exceed AED 375,000 in a 12-month period. Voluntary registration is available from AED 187,500.' ),
        array( 'question' => 'Are Free Zone companies subject to VAT?', 'answer' => 'Most are — Free Zone status does not exempt VAT. Designated Zones have specific rules for goods, but services are generally taxable.' ),
        array( 'question' => 'How long does a VAT refund take?', 'answer' => 'FTA refund timelines vary. A well-prepared application with complete supporting documentation typically resolves in 20–40 business days.' ),
        array( 'question' => 'Can you represent us in an FTA audit?', 'answer' => 'Yes — Kingston handles the full audit lifecycle, including responding to information requests, attending FTA meetings and filing reconsideration requests.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
