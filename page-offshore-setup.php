<?php
/**
 * Template Name: Offshore Setup
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Offshore Setup',
    'page_eyebrow' => 'Business Setup',
    'page_heading' => 'UAE offshore — for holding, structuring and international trade.',
    'page_intro'   => 'A UAE offshore company is a non-resident legal entity ideal for holding shares in operating companies, owning assets, and trading internationally — with no UAE physical-presence requirement.',
    'banner_image' => kingston_asset( 'img/services/offshore-setup.svg' ),
    'banner_alt'   => 'Offshore Setup — Kingston',

    'overview_heading' => 'Offshore Setup in the UAE — done right.',
    'overview_body'    => "UAE offshore is not a tax dodge. It is a structuring tool. The major UAE offshore regimes — JAFZA Offshore, RAK ICC and Ajman Offshore — offer fast, low-cost incorporation for vehicles whose role is to hold shares, own real estate, hold IP, or trade outside the UAE local market.\n\nKingston handles offshore incorporation across all three regimes, and advises on the right choice for your group structure — including ESR scoping for the years ahead.",

    'includes_items' => array(
        array( 'title' => 'JAFZA Offshore',          'description' => 'Dubai-issued offshore vehicle — popular for holding UAE real estate and as the parent of UAE operating entities. Listing-eligible.' ),
        array( 'title' => 'RAK ICC',                 'description' => 'RAK International Corporate Centre — modern common-law-flavoured regime; widely used for holding companies, SPVs and IP holding.' ),
        array( 'title' => 'Ajman Offshore',          'description' => 'Cost-effective alternative — popular for international trading vehicles and personal holding structures.' ),
        array( 'title' => 'Foundations & trusts',    'description' => 'Where succession or asset-protection is the goal, we structure ADGM and DIFC foundations alongside offshore vehicles.' ),
        array( 'title' => 'Bank account opening',    'description' => 'Curated introductions to UAE banks experienced with offshore structures — including non-resident director scenarios.' ),
        array( 'title' => 'ESR & corporate tax scoping','description' => 'Every offshore engagement includes scoping of Economic Substance Regulations and UAE corporate tax exposure.' ),
    ),
    'why_items' => array(
        array( 'title' => 'Structuring partner, not just incorporator', 'description' => 'We will tell you when offshore is wrong for your goal — for example, where Free Zone is needed for visas or local trade.' ),
        array( 'title' => 'ESR-aware',                                  'description' => 'Offshore + ESR is where most groups get tripped up. We design positions that are clean from day one.' ),
        array( 'title' => 'Connected to UAE banking',                   'description' => 'Offshore-friendly bank introductions matter — we have them.' ),
        array( 'title' => 'Joined-up with audit and tax',               'description' => 'If your group includes audited entities, structuring stays aligned with audit and tax positions across the board.' ),
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

    'process_heading' => 'How an offshore setup engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Structuring',  'description' => 'Map the purpose of the vehicle (holding, real-estate, IP, trade), agree the right regime, and document the position.' ),
        array( 'title' => 'Incorporation','description' => 'Name approval, MoA/AoA, registered agent, certificate of incorporation.' ),
        array( 'title' => 'Banking',      'description' => 'Curated bank introductions and KYC support — typically the longest leg of an offshore project.' ),
        array( 'title' => 'ESR & tax',    'description' => 'Annual ESR notification (where applicable), UAE corporate tax registration assessment, and ongoing compliance.' ),
    ),
    'faq_heading' => 'Common questions about offshore setup.',
    'faq_items'   => array(
        array( 'question' => 'Can a UAE offshore company own real estate in Dubai?', 'answer' => 'Only JAFZA Offshore is currently approved to own real estate in designated Dubai areas. RAK ICC and Ajman Offshore are not. We advise per asset class.' ),
        array( 'question' => 'Can an offshore company sponsor a UAE residence visa?', 'answer' => 'No — offshore companies do not provide visa eligibility. If you need residency, pair the offshore vehicle with a Free Zone or Mainland operating entity.' ),
        array( 'question' => 'Is offshore subject to UAE corporate tax?', 'answer' => 'UAE offshore entities are within scope of UAE corporate tax in many cases. Whether they have any taxable income depends on the activity. Kingston scopes this carefully — and structures to avoid surprises.' ),
        array( 'question' => 'Do offshore companies need ESR notifications?', 'answer' => 'Where they carry on a Relevant Activity in any year, yes. Kingston includes ESR scoping with every offshore engagement.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
