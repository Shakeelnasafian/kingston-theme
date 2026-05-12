<?php
/**
 * Template Name: Contact
 */
get_header();

$default_form_services = array(
    array( 'label' => 'Statutory Audit' ),
    array( 'label' => 'Internal Audit' ),
    array( 'label' => 'Forensic Audit' ),
    array( 'label' => 'Due Diligence' ),
    array( 'label' => 'Corporate Tax' ),
    array( 'label' => 'VAT Services' ),
    array( 'label' => 'Excise Tax' ),
    array( 'label' => 'Other / not sure yet' ),
);

$default_faqs = array(
    array( 'question' => 'Do you offer free consultations?', 'answer' => 'Yes — every new engagement begins with a free 30-minute consultation with a partner, by phone, video or in person at our Sheikh Zayed Road office.' ),
    array( 'question' => 'How quickly will I hear back?', 'answer' => 'We reply to every enquiry within one business day. For urgent matters, please call +971 50 874 7098 directly.' ),
    array( 'question' => 'How do you bill engagements?', 'answer' => 'Most Kingston work is fixed-fee, agreed in writing before any work starts. For ongoing compliance work (VAT, corporate tax, internal audit) we offer transparent monthly subscriptions.' ),
    array( 'question' => 'Do you serve clients outside Dubai?', 'answer' => 'Yes — we serve clients across the UAE (Dubai, Abu Dhabi, Sharjah, RAK, Ajman, UAQ, Fujairah) and across the GCC for forensic and transaction-advisory engagements.' ),
);

$page_eyebrow = kingston_field( 'page_eyebrow', 'Contact us' );
$page_heading = kingston_field( 'page_heading', 'Talk to a partner. Today.' );
$page_intro   = kingston_field( 'page_intro',   'Tell us about your business and the help you need. We will be in touch within one business day to scope the engagement, the timeline and the fee — clearly, in writing.' );

$address_label = kingston_field( 'address_label', 'Office' );
$address_body  = kingston_field( 'address_body',  "Office 203, Aspin Commercial Tower<br />Street 104, Trade Centre First<br />Sheikh Zayed Road, Dubai, UAE" );
$phone_label   = kingston_field( 'phone_label',   'Phone' );
$phone_number  = kingston_field( 'phone_number',  '+971 50 874 7098' );
$phone_hours   = kingston_field( 'phone_hours',   'Sun–Thu, 9:00 – 18:00 GST' );
$email_label   = kingston_field( 'email_label',   'Email' );
$email_addr    = kingston_field( 'email_addr',    'info@kingstonca.com' );
$email_note    = kingston_field( 'email_note',    'We reply within one business day' );
$hours_label   = kingston_field( 'hours_label',   'Hours' );
$hours_body    = kingston_field( 'hours_body',    "Sunday – Thursday<br />9:00 AM – 6:00 PM (GST)" );

$form_heading   = kingston_field( 'form_heading',   'Tell us about your project' );
$form_subhead   = kingston_field( 'form_subhead',   'Free, confidential, 30-minute consultation with a Kingston partner.' );
$form_button    = kingston_field( 'form_button',    'Request consultation' );
$form_consent   = kingston_field( 'form_consent',   'By submitting, you agree that Kingston may contact you about your enquiry. We do not share your details with third parties.' );
$form_shortcode = kingston_field( 'form_shortcode', '' );
$form_services  = kingston_rows(  'form_services',  $default_form_services );

$map_eyebrow = kingston_field( 'map_eyebrow', 'Find us' );
$map_heading = kingston_field( 'map_heading', 'Sheikh Zayed Road, Dubai.' );
$map_intro   = kingston_field( 'map_intro',   'A short walk from World Trade Centre Metro Station — visitor parking available in the building.' );
$map_iframe  = kingston_field( 'map_iframe',  'https://www.google.com/maps?q=Aspin+Commercial+Tower,+Sheikh+Zayed+Road,+Dubai&output=embed' );

$faq_eyebrow = kingston_field( 'faq_eyebrow', 'FAQ' );
$faq_heading = kingston_field( 'faq_heading', 'Common questions, answered.' );
$faq_items   = kingston_rows(  'faq_items',   $default_faqs );

$tel_clean = preg_replace( '/[^0-9+]/', '', $phone_number );
?>
<section class="page-header">
  <div class="container">
    <div class="crumbs">
      <a href="<?php echo kingston_url('index'); ?>">Home</a> <span>›</span> <span>Contact</span>
    </div>
    <span class="eyebrow" style="color:var(--gold-400)"><?php echo esc_html( $page_eyebrow ); ?></span>
    <h1 class="mt-2"><?php echo esc_html( $page_heading ); ?></h1>
    <p><?php echo esc_html( $page_intro ); ?></p>
  </div>
</section>

<section>
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info reveal">
        <div class="contact-tile">
          <div class="icon"><?php echo kingston_icon( 'pin', 22 ); ?></div>
          <div>
            <h4><?php echo esc_html( $address_label ); ?></h4>
            <p><?php echo wp_kses_post( $address_body ); ?></p>
          </div>
        </div>
        <div class="contact-tile">
          <div class="icon"><?php echo kingston_icon( 'phone', 22 ); ?></div>
          <div>
            <h4><?php echo esc_html( $phone_label ); ?></h4>
            <a href="tel:<?php echo esc_attr( $tel_clean ); ?>"><?php echo esc_html( $phone_number ); ?></a>
            <?php if ( $phone_hours ) : ?><p style="font-size:.85rem;color:var(--ink-300)"><?php echo esc_html( $phone_hours ); ?></p><?php endif; ?>
          </div>
        </div>
        <div class="contact-tile">
          <div class="icon"><?php echo kingston_icon( 'mail', 22 ); ?></div>
          <div>
            <h4><?php echo esc_html( $email_label ); ?></h4>
            <a href="mailto:<?php echo esc_attr( $email_addr ); ?>"><?php echo esc_html( $email_addr ); ?></a>
            <?php if ( $email_note ) : ?><p style="font-size:.85rem;color:var(--ink-300)"><?php echo esc_html( $email_note ); ?></p><?php endif; ?>
          </div>
        </div>
        <div class="contact-tile">
          <div class="icon"><?php echo kingston_icon( 'clock', 22 ); ?></div>
          <div>
            <h4><?php echo esc_html( $hours_label ); ?></h4>
            <p><?php echo wp_kses_post( $hours_body ); ?></p>
          </div>
        </div>
      </div>

      <?php if ( $form_shortcode ) : ?>
        <div class="form-card contact-form reveal">
          <h3><?php echo esc_html( $form_heading ); ?></h3>
          <p><?php echo esc_html( $form_subhead ); ?></p>
          <?php echo do_shortcode( $form_shortcode ); ?>
        </div>
      <?php else : ?>
      <form class="form-card contact-form reveal" novalidate>
        <h3><?php echo esc_html( $form_heading ); ?></h3>
        <p><?php echo esc_html( $form_subhead ); ?></p>
        <div class="form-row">
          <div class="field"><label for="fname">First name</label><input id="fname" name="fname" type="text" required placeholder="Your first name" /></div>
          <div class="field"><label for="lname">Last name</label><input id="lname" name="lname" type="text" required placeholder="Your last name" /></div>
        </div>
        <div class="form-row">
          <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" required placeholder="you@company.ae" /></div>
          <div class="field"><label for="phone">Phone</label><input id="phone" name="phone" type="tel" placeholder="+971 …" /></div>
        </div>
        <div class="field" style="margin-bottom:14px"><label for="company">Company</label><input id="company" name="company" type="text" placeholder="Company name" /></div>
        <div class="field" style="margin-bottom:14px">
          <label for="service">Service of interest</label>
          <select id="service" name="service">
            <option value="">Select a service…</option>
            <?php foreach ( $form_services as $svc ) : ?>
              <option><?php echo esc_html( kingston_row( $svc, 'label' ) ); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="field" style="margin-bottom:6px"><label for="msg">How can we help?</label><textarea id="msg" name="msg" required placeholder="A few lines about your business, deadlines and what you need from us…"></textarea></div>
        <button type="submit" class="btn btn-primary"><?php echo esc_html( $form_button ); ?> <span class="arrow">→</span></button>
        <p class="consent"><?php echo esc_html( $form_consent ); ?></p>
      </form>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $map_eyebrow ); ?></span>
      <h2><?php echo esc_html( $map_heading ); ?></h2>
      <p><?php echo esc_html( $map_intro ); ?></p>
    </div>
    <div class="map-card reveal">
      <iframe loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="<?php echo esc_url( $map_iframe ); ?>"></iframe>
    </div>
  </div>
</section>

<section>
  <div class="container" style="max-width:880px">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $faq_eyebrow ); ?></span>
      <h2><?php echo esc_html( $faq_heading ); ?></h2>
    </div>
    <?php foreach ( $faq_items as $faq ) : ?>
      <details class="faq reveal"><summary><?php echo esc_html( kingston_row( $faq, 'question' ) ); ?></summary><p><?php echo wp_kses_post( kingston_row( $faq, 'answer' ) ); ?></p></details>
    <?php endforeach; ?>
  </div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>

<?php get_footer();
