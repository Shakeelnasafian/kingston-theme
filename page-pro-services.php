<?php
/**
 * Template Name: PRO & Visa Services
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'PRO & Visa Services',
    'page_eyebrow' => 'Business Setup',
    'page_heading' => 'PRO & visas — handled end to end, on time, every time.',
    'page_intro'   => 'Investor visas, employee visas, family residence visas, Emirates ID, medical fitness, attestations, immigration cards and ongoing PRO support — managed by people who know the queues, the portals and the right way to ask.',
    'banner_image' => kingston_asset( 'img/services/pro-services.svg' ),
    'banner_alt'   => 'PRO & Visa Services — Kingston',

    'overview_heading' => 'PRO & Visa Services in the UAE — done right.',
    'overview_body'    => "PRO and visa work is unglamorous, paperwork-heavy, and the place where most UAE businesses lose time and patience. Forms reject for missing stamps. Medicals fall on holidays. Family visas wait on a missed attestation from a third country. None of this is hard. All of it is annoying.\n\nKingston runs PRO and visa services as a structured service — clear checklists, single point of contact, status updates, and SLAs on the things that need them. Founders get visas. Boards get visibility. Nothing falls through the cracks.",

    'includes_items' => array(
        array( 'title' => 'Investor & partner visas',         'description' => 'Issued post-licence — full processing including entry permit, change of status, medical, Emirates ID and residence stamping.' ),
        array( 'title' => 'Employee visas',                   'description' => 'End-to-end employee visa processing — including offer letter, MoHRE work permit, entry permit, medical, Emirates ID and residence visa.' ),
        array( 'title' => 'Family residence visas',           'description' => 'Spouse, children and parent residence visas — including required income/insurance evidence and attestations.' ),
        array( 'title' => 'Emirates ID & medical',            'description' => 'Booking, accompaniment where needed, and same-day pickups where the system allows.' ),
        array( 'title' => 'Attestations & legal translations','description' => 'Document attestation (origin country + UAE consulate + MOFA) and legal translations under UAE-recognised translators.' ),
        array( 'title' => 'Ongoing PRO support',              'description' => 'Renewals, amendments, immigration card renewals, establishment card renewals — diarised and managed.' ),
    ),
    'why_items' => array(
        array( 'title' => 'People, not portals',     'description' => 'Most issues need a real person at the right desk. Our PRO team knows the desks.' ),
        array( 'title' => 'SLA-driven',              'description' => 'Each step has a target turnaround — and you see status weekly, not when something breaks.' ),
        array( 'title' => 'Single point of contact', 'description' => 'One person owns your file. One person you call. Decisions do not get lost in a generic inbox.' ),
        array( 'title' => 'Joined-up with setup',    'description' => 'PRO sits inside our setup engagements — no "we will introduce you to a PRO" hand-off after licence issuance.' ),
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

    'process_heading' => 'How a pro & visa services engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'File opening',              'description' => 'Collect documents, set up the file, confirm visa quota and timeline expectations.' ),
        array( 'title' => 'Entry permits & medical',   'description' => 'Process entry permits, accompany on medicals, secure Emirates ID appointments.' ),
        array( 'title' => 'Stamping & ID',             'description' => 'Residence visa stamping in passport (or e-residence), Emirates ID issuance and dependant updates.' ),
        array( 'title' => 'Renewal & tracking',        'description' => 'Diarised renewal calendar — investor visas, residence visas, immigration card, establishment card.' ),
    ),
    'faq_heading' => 'Common questions about pro & visa services.',
    'faq_items'   => array(
        array( 'question' => 'How long does an investor visa take?', 'answer' => 'Typical end-to-end timing from licence issuance is 3–6 weeks, including entry permit, medical, Emirates ID and residence stamping. We agree the calendar at file opening.' ),
        array( 'question' => 'Can my spouse and kids come on my UAE visa?', 'answer' => 'Yes — with sufficient income (typically AED 4,000–10,000/month depending on emirate and dependent type) and standard documents (attested marriage and birth certificates).' ),
        array( 'question' => 'Do you handle visa renewals?', 'answer' => 'Yes — we run the renewal calendar for every active client and handle the renewal end-to-end before expiry.' ),
        array( 'question' => 'Can I get a 10-year Golden Visa through Kingston?', 'answer' => 'We assess Golden Visa eligibility against published criteria (investor, specialist, etc.) and handle the application end-to-end where eligible.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
