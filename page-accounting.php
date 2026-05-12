<?php
/**
 * Template Name: Accounting & Bookkeeping
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Accounting & Bookkeeping',
    'page_eyebrow' => 'Outsourced Finance',
    'page_heading' => 'Books that close on time. Numbers your board can trust.',
    'page_intro'   => 'Cloud-first outsourced accounting and bookkeeping for UAE businesses — IFRS-compliant, VAT-ready, audit-ready, and delivered as monthly management accounts your CFO can actually use to run the business.',
    'banner_image' => kingston_asset( 'img/services/accounting.svg' ),
    'banner_alt'   => 'Accounting & Bookkeeping — Kingston',

    'overview_heading' => 'Accounting & Bookkeeping in the UAE — done right.',
    'overview_body'    => "Most UAE finance teams do not have a bookkeeping problem. They have a closing-cycle problem. Invoices booked late, reconciliations done quarterly, and management accounts that arrive a month after they could have changed a decision.\n\nKingston runs the books for ambitious UAE SMEs and family offices — cloud-first, IFRS-compliant, with a hard-locked closing calendar and monthly management accounts in your inbox by working day five.",

    'includes_items' => array(
        array( 'title' => 'Day-to-day bookkeeping',     'description' => 'Sales, purchases, banking, expenses, payroll journals — recorded daily or weekly in your cloud accounting system.' ),
        array( 'title' => 'Monthly closing',            'description' => 'Hard-locked monthly close with reconciliations, accruals and prepayments — by working day five, every month.' ),
        array( 'title' => 'Management accounts',       'description' => 'Board-ready monthly P&L, balance sheet and cash-flow with variance commentary your CFO can present.' ),
        array( 'title' => 'VAT-ready chart of accounts','description' => 'Tax codes, supplier and customer master data set up so VAT returns prepare themselves.' ),
        array( 'title' => 'Audit-ready files',          'description' => 'Workpapers, supporting documents and reconciliations kept in audit-ready order — your statutory audit gets faster and cheaper.' ),
        array( 'title' => 'Cloud accounting setup',     'description' => 'Implementation and migration onto Zoho Books, QuickBooks, Xero or Tally — including data clean-up and training.' ),
    ),
    'why_items' => array(
        array( 'title' => 'Senior eyes monthly',         'description' => 'Every month-end pack is reviewed by a chartered accountant before it lands with you.' ),
        array( 'title' => 'Audit-ready by design',       'description' => 'Books kept the way an auditor wants to find them — saving you days of audit fieldwork.' ),
        array( 'title' => 'Fixed monthly fee',           'description' => 'Predictable monthly subscription, no surprise bills, transparent scope.' ),
        array( 'title' => 'Joined-up with audit & tax',  'description' => 'Same firm signs your statutory audit and files your VAT — no hand-offs, no re-explaining.' ),
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

    'process_heading' => 'How an accounting & bookkeeping engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Onboarding & cleanup', 'description' => 'We review your current accounting state, agree the chart of accounts, and clean up the opening balances.' ),
        array( 'title' => 'Cloud setup',          'description' => 'Migrate or stand up your cloud accounting system, configure VAT codes, banks, customers and suppliers.' ),
        array( 'title' => 'Monthly close',        'description' => 'Daily/weekly bookkeeping, hard-locked month-end close by WD5, reconciliations and management accounts pack.' ),
        array( 'title' => 'Quarterly review',     'description' => 'Quarterly review with a senior accountant — controls, KPIs, cash forecast and finance-function maturity plan.' ),
    ),
    'faq_heading' => 'Common questions about accounting & bookkeeping.',
    'faq_items'   => array(
        array( 'question' => 'Which accounting software do you support?', 'answer' => 'We work in Zoho Books, QuickBooks Online, Xero, Tally and Sage. If you already use one, we work in it. If not, we recommend the right fit and migrate you on.' ),
        array( 'question' => 'Can you handle payroll and WPS?', 'answer' => 'Yes — monthly payroll preparation, WPS file generation and gratuity accruals are included in most engagements.' ),
        array( 'question' => 'Is this just for small businesses?', 'answer' => 'No. Many of our outsourced accounting engagements are with mid-market groups (multi-entity, multi-currency) where outsourcing is faster and cheaper than building an in-house team.' ),
        array( 'question' => 'How quickly do you close the month?', 'answer' => 'Working day five is our standard. For larger or multi-entity groups, we agree a tailored closing calendar — and stick to it.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
