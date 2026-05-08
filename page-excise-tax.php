<?php
/**
 * Template Name: Excise Tax
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Excise Tax',
    'page_eyebrow' => 'Tax & Compliance',
    'page_heading' => 'Excise tax — registered, calculated, filed.',
    'page_intro'   => 'End-to-end excise tax services for UAE businesses dealing in tobacco, energy drinks, sweetened beverages and electronic smoking devices — including registration, calculation, filing and advisory.',
    'banner_image' => kingston_asset( 'img/services/excise-tax.svg' ),
    'banner_alt'   => 'Excise Tax — Kingston',

    'overview_heading' => 'Excise Tax in the UAE — done right.',
    'overview_body'    => "Excise tax is narrow in scope but unforgiving in application. Mis-classify a product, miss a registration deadline or get the price-base wrong, and penalties accumulate fast. The rules are also product-specific — what applies to a soft drink does not apply to an energy drink does not apply to an e-liquid.\n\nKingston advises importers, manufacturers, stockpilers and warehouse-keepers on the full excise lifecycle — registration through to FTA audit defence — with a focus on getting the product classifications and price bases right the first time.",

    'includes_items' => array(
        array( 'title' => 'Excise tax registration',  'description' => 'FTA registration as importer, producer, stockpiler or designated-zone warehouse-keeper.' ),
        array( 'title' => 'Product classification',   'description' => "Accurate classification of products against the excisable goods list and the FTA's published price database." ),
        array( 'title' => 'Designated zone advisory', 'description' => 'Bonded warehouse and designated zone movements, including transfer rules and obligations on release.' ),
        array( 'title' => 'Filing & payment',         'description' => 'Monthly excise return preparation, supporting workpapers and timely settlement of liabilities.' ),
        array( 'title' => 'Stockpile declarations',   'description' => 'Identification, valuation and declaration of stockpiled excisable goods at rate-change events.' ),
        array( 'title' => 'FTA audit support',        'description' => 'Response, document preparation and representation through FTA excise audits and clarifications.' ),
    ),
    'why_items' => array(
        array( 'title' => 'Specialist team',     'description' => 'Excise is small but technical — and we keep dedicated specialists across importers and stockpilers.' ),
        array( 'title' => 'End-to-end coverage', 'description' => 'Registration, monthly compliance, designated-zone movements and FTA defence — under one roof.' ),
        array( 'title' => 'Penalty prevention',  'description' => 'Most excise penalties are avoidable with cleaner upstream classification — that is where we focus.' ),
        array( 'title' => 'Sector experience',   'description' => 'Beverages, tobacco and electronic smoking devices — we have served all three categories.' ),
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

    'process_heading' => 'How an excise tax engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Diagnostic',           'description' => 'Confirm registration category, classify products and identify any historical exposure.' ),
        array( 'title' => 'Registration & setup', 'description' => 'Complete FTA registration, configure systems and document the price-base methodology.' ),
        array( 'title' => 'Monthly compliance',   'description' => 'Return preparation, supporting calculations and timely filing & payment.' ),
        array( 'title' => 'Audit & advisory',     'description' => 'Year-round access for technical questions and full representation through FTA audits.' ),
    ),
    'faq_heading' => 'Common questions about excise tax.',
    'faq_items'   => array(
        array( 'question' => 'Which goods are excisable in the UAE?', 'answer' => 'Tobacco and tobacco products, electronic smoking devices and liquids, energy drinks (100%), and sweetened/carbonated drinks (50%). Kingston confirms current rates and product scope at engagement.' ),
        array( 'question' => 'Do I need to register if I only stockpile?', 'answer' => 'Yes — stockpilers above defined thresholds must register and may have liability on stocks held at rate change events.' ),
        array( 'question' => 'How often are excise returns filed?', 'answer' => 'Excise returns are filed monthly, typically within 15 days of the end of the tax period, with payment due alongside.' ),
        array( 'question' => 'Can you handle imports through designated zones?', 'answer' => 'Yes — including bonded warehouse setup, intra-zone movements and the excise consequences of release for consumption.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
