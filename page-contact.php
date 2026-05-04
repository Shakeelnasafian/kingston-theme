<?php
/**
 * Template Name: Contact
 *
 * Static page template converted from contact.html.
 * Edit the markup below to update the page; the WordPress editor is not used.
 */
get_header();
?>
<section class="page-header">
  <div class="container">
    <div class="crumbs">
      <a href="<?php echo kingston_url('index.html'); ?>">Home</a> <span>›</span> <span>Contact</span>
    </div>
    <span class="eyebrow" style="color:var(--gold-400)">Contact us</span>
    <h1 class="mt-2">Talk to a partner. Today.</h1>
    <p>Tell us about your business and the help you need. We will be in touch within one business day to scope the engagement, the timeline and the fee — clearly, in writing.</p>
  </div>
</section>
<section>
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info reveal">
        <div class="contact-tile">
          <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div>
            <h4>Office</h4>
            <p>Office 203, Aspin Commercial Tower<br />Street 104, Trade Centre First<br />Sheikh Zayed Road, Dubai, UAE</p>
          </div>
        </div>
        <div class="contact-tile">
          <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 2.08 4.18 2 2 0 0 1 4.07 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
          <div>
            <h4>Phone</h4>
            <a href="tel:+971508747098">+971 50 874 7098</a>
            <p style="font-size:.85rem;color:var(--ink-300)">Sun–Thu, 9:00 – 18:00 GST</p>
          </div>
        </div>
        <div class="contact-tile">
          <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
          <div>
            <h4>Email</h4>
            <a href="mailto:info@kingstonca.com">info@kingstonca.com</a>
            <p style="font-size:.85rem;color:var(--ink-300)">We reply within one business day</p>
          </div>
        </div>
        <div class="contact-tile">
          <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <div>
            <h4>Hours</h4>
            <p>Sunday – Thursday<br />9:00 AM – 6:00 PM (GST)</p>
          </div>
        </div>
      </div>

      <form class="form-card contact-form reveal" novalidate>
        <h3>Tell us about your project</h3>
        <p>Free, confidential, 30-minute consultation with a Kingston partner.</p>
        <div class="form-row">
          <div class="field">
            <label for="fname">First name</label>
            <input id="fname" name="fname" type="text" required placeholder="Your first name" />
          </div>
          <div class="field">
            <label for="lname">Last name</label>
            <input id="lname" name="lname" type="text" required placeholder="Your last name" />
          </div>
        </div>
        <div class="form-row">
          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" required placeholder="you@company.ae" />
          </div>
          <div class="field">
            <label for="phone">Phone</label>
            <input id="phone" name="phone" type="tel" placeholder="+971 …" />
          </div>
        </div>
        <div class="field" style="margin-bottom:14px">
          <label for="company">Company</label>
          <input id="company" name="company" type="text" placeholder="Company name" />
        </div>
        <div class="field" style="margin-bottom:14px">
          <label for="service">Service of interest</label>
          <select id="service" name="service">
            <option value="">Select a service…</option>
            <option>Statutory Audit</option>
            <option>Internal Audit</option>
            <option>Forensic Audit</option>
            <option>Due Diligence</option>
            <option>Corporate Tax</option>
            <option>VAT Services</option>
            <option>Excise Tax</option>
            <option>Other / not sure yet</option>
          </select>
        </div>
        <div class="field" style="margin-bottom:6px">
          <label for="msg">How can we help?</label>
          <textarea id="msg" name="msg" required placeholder="A few lines about your business, deadlines and what you need from us…"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Request consultation <span class="arrow">→</span></button>
        <p class="consent">By submitting, you agree that Kingston may contact you about your enquiry. We do not share your details with third parties.</p>
      </form>
    </div>
  </div>
</section>

<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center">Find us</span>
      <h2>Sheikh Zayed Road, Dubai.</h2>
      <p>A short walk from World Trade Centre Metro Station — visitor parking available in the building.</p>
    </div>
    <div class="map-card reveal">
      <iframe loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps?q=Aspin+Commercial+Tower,+Sheikh+Zayed+Road,+Dubai&output=embed"></iframe>
    </div>
  </div>
</section>

<section>
  <div class="container" style="max-width:880px">
    <div class="section-head reveal">
      <span class="eyebrow center">FAQ</span>
      <h2>Common questions, answered.</h2>
    </div>
    <details class="faq reveal"><summary>Do you offer free consultations?</summary><p>Yes — every new engagement begins with a free 30-minute consultation with a partner, by phone, video or in person at our Sheikh Zayed Road office.</p></details>
    <details class="faq reveal"><summary>How quickly will I hear back?</summary><p>We reply to every enquiry within one business day. For urgent matters, please call +971 50 874 7098 directly.</p></details>
    <details class="faq reveal"><summary>How do you bill engagements?</summary><p>Most Kingston work is fixed-fee, agreed in writing before any work starts. For ongoing compliance work (VAT, corporate tax, internal audit) we offer transparent monthly subscriptions.</p></details>
    <details class="faq reveal"><summary>Do you serve clients outside Dubai?</summary><p>Yes — we serve clients across the UAE (Dubai, Abu Dhabi, Sharjah, RAK, Ajman, UAQ, Fujairah) and across the GCC for forensic and transaction-advisory engagements.</p></details>
  </div>
</section>

<section style="padding:48px 0 var(--section-y)">
  <div class="container">
    <div class="cta-banner reveal">
      <div class="container cta-banner-row">
        <div>
          <span class="eyebrow" style="color:var(--gold-400)">Ready to talk?</span>
          <h2 class="mt-2">Bring us your hardest audit, tax or advisory question.</h2>
          <p>Book a free 30-minute consultation. We will tell you straight whether we can help — and how much it will cost.</p>
        </div>
        <div class="cta-actions">
          <a href="<?php echo kingston_url('contact.html'); ?>" class="btn btn-gold">Book consultation <span class="arrow">→</span></a>
          <a href="tel:+971508747098" class="btn btn-light">Call +971 50 874 7098</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();
