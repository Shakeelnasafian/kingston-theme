<?php
/**
 * The front page template — rendered when the site root is requested
 * and a static front page is set in Settings → Reading.
 *
 * Static content converted from index.html.
 */
get_header();
?>
<!-- HERO SLIDER -->
<section class="hero-slider" data-hero-slider="6500" aria-roledescription="carousel">
  <div class="hero-progress"><div class="hero-progress-bar"></div></div>
  <div class="hero-counter"><span class="current">01</span> <span style="opacity:.5">/</span> <span class="total">03</span></div>

  <div class="hero-track">

    <!-- SLIDE 1: Audit -->
    <div class="hero-slide" role="group" aria-roledescription="slide">
      <div class="container">
        <div class="hero-slide-grid">
          <div>
            <span class="eyebrow" style="color:var(--gold-400)">Audit · Tax · Advisory · Dubai, UAE</span>
            <h1>Clarity in numbers.<br /><span class="word-gold">Confidence</span> in decisions.</h1>
            <p class="lead">Kingston Chartered Auditing &amp; Advisory partners with ambitious UAE businesses to deliver statutory audit, tax compliance and advisory grounded in integrity, technical excellence and financial transparency.</p>
            <div class="hero-cta">
              <a href="<?php echo kingston_url('contact.html'); ?>" class="btn btn-gold">Schedule a free consultation <span class="arrow">→</span></a>
              <a href="<?php echo kingston_url('services.html'); ?>" class="btn btn-light">Explore our services</a>
            </div>
            <div class="hero-trust">
              <div><div class="num"><span data-count="500">0</span>+</div><div class="label">Engagements delivered</div></div>
              <div><div class="num"><span data-count="15">0</span>+</div><div class="label">Years combined experience</div></div>
              <div><div class="num"><span data-count="98">0</span>%</div><div class="label">Client retention rate</div></div>
            </div>
          </div>
          <div>
            <!-- IMAGE PLACEHOLDER · replace assets/img/hero/audit.svg with photo -->
            <div class="hero-slide-visual has-image">
              <img src="<?php echo kingston_asset('img/hero/audit.svg'); ?>" alt="Kingston audit and assurance" loading="lazy" />
              <div class="emblem">K</div>
              <div class="hero-card c1 float">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
                <div><div class="label">IFRS Certified</div><div class="value">Audit Quality</div></div>
              </div>
              <div class="hero-card c2 float-delay">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/></svg></div>
                <div><div class="label">Reports Filed</div><div class="value">FTA Compliant</div></div>
              </div>
              <div class="hero-card c3 float">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <div><div class="label">Approved By</div><div class="value">UAE Authorities</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 2: Free Zone -->
    <div class="hero-slide" role="group" aria-roledescription="slide">
      <div class="container">
        <div class="hero-slide-grid">
          <div>
            <span class="eyebrow" style="color:var(--gold-400)">Free Zone Audit · UAE-wide</span>
            <h1>Approved auditors.<br /><span class="word-gold">Every</span> major UAE Free Zone.</h1>
            <p class="lead">Kingston is registered across DMCC, JAFZA, DAFZA, ADGM, DIFC, RAKEZ, SHAMS, IFZA, Meydan and more — so your annual audit is signed by a firm your zone authority will accept, first time.</p>
            <div class="hero-cta">
              <a href="<?php echo kingston_url('free-zone.html'); ?>" class="btn btn-gold">Free Zone audit details <span class="arrow">→</span></a>
              <a href="<?php echo kingston_url('contact.html'); ?>" class="btn btn-light">Talk to a partner</a>
            </div>
            <div class="hero-trust">
              <div><div class="num"><span data-count="20">0</span>+</div><div class="label">UAE Free Zones covered</div></div>
              <div><div class="num"><span data-count="98">0</span>%</div><div class="label">On-time licence-renewal</div></div>
              <div><div class="num">IFRS</div><div class="label">Audit standard</div></div>
            </div>
          </div>
          <div>
            <!-- IMAGE PLACEHOLDER · replace assets/img/hero/freezone.svg with photo -->
            <div class="hero-slide-visual has-image">
              <img src="<?php echo kingston_asset('img/hero/freezone.svg'); ?>" alt="UAE Free Zones" loading="lazy" />
              <div class="emblem" style="text-align:center;line-height:.95">FZ<br><small style="font-size:.18em;letter-spacing:.4em;color:rgba(255,255,255,.45);display:block;margin-top:6px">UAE FREE ZONES</small></div>
              <div class="hero-card c1 float">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/></svg></div>
                <div><div class="label">DMCC · JAFZA</div><div class="value">DAFZA · DIFC</div></div>
              </div>
              <div class="hero-card c2 float-delay">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <div><div class="label">Aligned with</div><div class="value">Licence renewal</div></div>
              </div>
              <div class="hero-card c3 float">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
                <div><div class="label">QFZP testing</div><div class="value">Built in</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 3: UAE Tax -->
    <div class="hero-slide" role="group" aria-roledescription="slide">
      <div class="container">
        <div class="hero-slide-grid">
          <div>
            <span class="eyebrow" style="color:var(--gold-400)">Corporate Tax · VAT · Excise · ESR</span>
            <h1>UAE tax — <span class="word-gold">handled</span>,<br />end to end.</h1>
            <p class="lead">From corporate tax registration and Qualifying Free Zone Person testing, to VAT refunds, to ESR notifications — UAE tax compliance and optimisation under one trusted roof.</p>
            <div class="hero-cta">
              <a href="<?php echo kingston_url('corporate-tax.html'); ?>" class="btn btn-gold">Corporate tax services <span class="arrow">→</span></a>
              <a href="<?php echo kingston_url('vat.html'); ?>" class="btn btn-light">VAT services</a>
            </div>
            <div class="hero-trust">
              <div><div class="num">FTA</div><div class="label">Approved tax agents</div></div>
              <div><div class="num"><span data-count="100">0</span>%</div><div class="label">On-time filing record</div></div>
              <div><div class="num">9%</div><div class="label">Corporate tax · UAE</div></div>
            </div>
          </div>
          <div>
            <!-- IMAGE PLACEHOLDER · replace assets/img/hero/tax.svg with photo -->
            <div class="hero-slide-visual has-image">
              <img src="<?php echo kingston_asset('img/hero/tax.svg'); ?>" alt="UAE Corporate Tax and VAT" loading="lazy" />
              <div class="emblem">%</div>
              <div class="hero-card c1 float">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
                <div><div class="label">Corporate Tax</div><div class="value">Plan · File · Defend</div></div>
              </div>
              <div class="hero-card c2 float-delay">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9h18"/><path d="M9 3l-3 18"/></svg></div>
                <div><div class="label">VAT</div><div class="value">Refund recovery</div></div>
              </div>
              <div class="hero-card c3 float">
                <div class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/></svg></div>
                <div><div class="label">ESR</div><div class="value">Substance &amp; reports</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="hero-controls">
    <button data-hero-prev aria-label="Previous slide">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
    </button>
    <div class="hero-dots" role="tablist"></div>
    <button data-hero-next aria-label="Next slide">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
    </button>
  </div>
</section>

<!-- Industries marquee -->
<section class="marquee" style="padding:32px 0">
  <div class="marquee-track">
    <span class="marquee-item">Trading &amp; Distribution</span>
    <span class="marquee-item">Real Estate</span>
    <span class="marquee-item">Construction &amp; Contracting</span>
    <span class="marquee-item">Hospitality &amp; F&amp;B</span>
    <span class="marquee-item">Retail &amp; E-commerce</span>
    <span class="marquee-item">Healthcare</span>
    <span class="marquee-item">Manufacturing</span>
    <span class="marquee-item">Financial Services</span>
    <span class="marquee-item">Logistics &amp; Shipping</span>
    <span class="marquee-item">Family Offices</span>
    <span class="marquee-item">Technology &amp; SaaS</span>
    <span class="marquee-item">Professional Services</span>
    <!-- duplicated for seamless loop -->
    <span class="marquee-item">Trading &amp; Distribution</span>
    <span class="marquee-item">Real Estate</span>
    <span class="marquee-item">Construction &amp; Contracting</span>
    <span class="marquee-item">Hospitality &amp; F&amp;B</span>
    <span class="marquee-item">Retail &amp; E-commerce</span>
    <span class="marquee-item">Healthcare</span>
    <span class="marquee-item">Manufacturing</span>
    <span class="marquee-item">Financial Services</span>
    <span class="marquee-item">Logistics &amp; Shipping</span>
    <span class="marquee-item">Family Offices</span>
    <span class="marquee-item">Technology &amp; SaaS</span>
    <span class="marquee-item">Professional Services</span>
  </div>
</section>

<!-- Logo strip -->
<section class="logos" style="padding:48px 0">
  <div class="container">
    <p class="logos-title">Trusted by founders, family offices &amp; multinationals across the UAE</p>
    <div class="logos-grid">
      <div>ALARIS GROUP</div>
      <div>NUWA HOLDINGS</div>
      <div>EMIRATE TRADING</div>
      <div>BAY &amp; CO.</div>
      <div>VERTEX FZ-LLC</div>
      <div>HARBOUR CAPITAL</div>
    </div>
  </div>
</section>

<!-- Services slider -->
<section id="services" class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center">What we do</span>
      <h2>End-to-end audit, tax &amp; advisory — under one trusted roof</h2>
      <p>Whether you are scaling a family business, listing a company or navigating UAE tax reform, our partners deliver rigorous work and clear counsel — on time, every time.</p>
    </div>

    <div class="slider" data-slider data-slider-per="3">
      <div class="slider-viewport">
        <div class="slider-track">
          <a href="<?php echo kingston_url('statutory-audit.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/statutory-audit.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/statutory-audit.svg'); ?>" alt="Statutory Audit" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">01</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
            <h3>Statutory Audit</h3>
            <p>Independent, IFRS-aligned audits that satisfy UAE corporate law and give your stakeholders absolute confidence in your numbers.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('internal-audit.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/internal-audit.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/internal-audit.svg'); ?>" alt="Internal Audit" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">02</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3>Internal Audit</h3>
            <p>Strengthen controls, manage risk and uncover operational efficiencies with a partner who knows where the gaps usually hide.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('forensic-audit.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/forensic-audit.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/forensic-audit.svg'); ?>" alt="Forensic Audit" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">03</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div>
            <h3>Forensic Audit</h3>
            <p>Discreet, court-ready investigations into fraud, financial crime and disputes — supported by evidence that holds up to scrutiny.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('free-zone.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/free-zone.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/free-zone.svg'); ?>" alt="Free Zone" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">04</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/><path d="M9 9v.01"/><path d="M9 12v.01"/><path d="M9 15v.01"/><path d="M9 18v.01"/></svg></div>
            <h3>Free Zone Audit</h3>
            <p>Approved auditors across DMCC, JAFZA, DAFZA, ADGM, DIFC, RAKEZ &amp; more — licence-renewal aligned.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('due-diligence.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/due-diligence.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/due-diligence.svg'); ?>" alt="Due Diligence" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">05</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 21l-4.35-4.35"/><path d="M11 19a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"/></svg></div>
            <h3>Due Diligence</h3>
            <p>The clear-eyed financial, tax and operational view you need before the deal closes — so you buy facts, not surprises.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('corporate-tax.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/corporate-tax.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/corporate-tax.svg'); ?>" alt="Corporate Tax" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">06</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
            <h3>Corporate Tax</h3>
            <p>Plan, file and defend — end-to-end UAE corporate tax compliance with a strategy that legally optimises your tax bill.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('vat.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/vat.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/vat.svg'); ?>" alt="Vat" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">07</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9h18"/><path d="M3 15h18"/><path d="M9 3l-3 18"/><path d="M18 3l-3 18"/></svg></div>
            <h3>VAT Services</h3>
            <p>Registration, return filing, refund recovery and FTA representation — VAT handled, so you can focus on your business.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('excise-tax.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/excise-tax.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/excise-tax.svg'); ?>" alt="Excise Tax" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">08</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v4H3z"/><path d="M5 7v14h14V7"/><path d="M9 11h6"/></svg></div>
            <h3>Excise Tax</h3>
            <p>Registration, calculation, filing and advisory for businesses dealing in excisable goods.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('accounting.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/accounting.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/accounting.svg'); ?>" alt="Accounting" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">09</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h20v18H2z"/><path d="M2 9h20"/><path d="M9 21V9"/></svg></div>
            <h3>Accounting &amp; Bookkeeping</h3>
            <p>Cloud-first outsourced accounting — IFRS-compliant, audit-ready monthly management accounts by working day five.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('aml-compliance.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/aml-compliance.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/aml-compliance.svg'); ?>" alt="Aml Compliance" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">10</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
            <h3>AML/CFT Compliance</h3>
            <p>Risk assessment, policies, goAML registration, training and independent AML audits for DNFBPs.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
          <a href="<?php echo kingston_url('esr.html'); ?>" class="service-card has-image">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/esr.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/esr.svg'); ?>" alt="Esr" loading="lazy"/></div>
            <div class="card-body">
            <span class="num">11</span>
            <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
            <h3>ESR Compliance</h3>
            <p>Economic Substance Regulations — scoping, notification, annual report and regulator response support.</p>
            <span class="read">Learn more <span class="arrow">→</span></span>
            </div>
          </a>
        </div>
      </div>
      <div class="slider-nav">
        <button class="arrow-btn" data-slider-prev aria-label="Previous">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <div class="slider-dots" role="tablist"></div>
        <button class="arrow-btn" data-slider-next aria-label="Next">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
      </div>
    </div>

    <div class="text-center" style="margin-top:24px">
      <a href="<?php echo kingston_url('services.html'); ?>" class="btn btn-ghost">View all services <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- Business Setup -->
<section>
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center">Business Setup</span>
      <h2>Three setup paths. One trusted partner.</h2>
      <p>Mainland, Free Zone or Offshore — Kingston handles end-to-end UAE company formation, then continues as your auditor and tax advisor. One firm. One team. No hand-offs.</p>
    </div>
    <div class="service-grid" style="grid-template-columns:repeat(3,1fr)">
      <a href="<?php echo kingston_url('mainland-setup.html'); ?>" class="service-card has-image reveal">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/mainland-setup.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/mainland-setup.svg'); ?>" alt="Mainland Setup" loading="lazy"/></div>
            <div class="card-body">
        <span class="num">01</span>
        <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V11l7-7 7 7v10"/><path d="M9 21V12h6v9"/></svg></div>
        <h3>Mainland Setup</h3>
        <p>The choice when you need to operate freely across the UAE, sell to government, or open multiple physical locations.</p>
        <span class="read">Mainland details <span class="arrow">→</span></span>
            </div>
          </a>
      <a href="<?php echo kingston_url('freezones.html'); ?>" class="service-card has-image reveal">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/free-zone.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/free-zone.svg'); ?>" alt="Freezones" loading="lazy"/></div>
            <div class="card-body">
        <span class="num">02</span>
        <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
        <h3>Free Zone Setup</h3>
        <p>100% foreign ownership, full repatriation, sector-focused regulators — across DMCC, JAFZA, DIFC, ADGM and more.</p>
        <span class="read">Browse Free Zones <span class="arrow">→</span></span>
            </div>
          </a>
      <a href="<?php echo kingston_url('offshore-setup.html'); ?>" class="service-card has-image reveal">
            <!-- IMAGE PLACEHOLDER · replace assets/img/services/offshore-setup.svg with photo -->
            <div class="img-frame ar-3x2"><img src="<?php echo kingston_asset('img/services/offshore-setup.svg'); ?>" alt="Offshore Setup" loading="lazy"/></div>
            <div class="card-body">
        <span class="num">03</span>
        <div class="service-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12c0-5 4-9 9-9s9 4 9 9-4 9-9 9-9-4-9-9z"/><path d="M12 3v18"/></svg></div>
        <h3>Offshore Setup</h3>
        <p>JAFZA Offshore, RAK ICC and Ajman Offshore — for holding structures, asset protection and international trading.</p>
        <span class="read">Offshore details <span class="arrow">→</span></span>
            </div>
          </a>
    </div>
    <div class="text-center" style="margin-top:36px">
      <a href="<?php echo kingston_url('business-setup.html'); ?>" class="btn btn-ghost">Compare Mainland · Free Zone · Offshore <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- Free Zones showcase -->
<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center">UAE Free Zones</span>
      <h2>Nine UAE Free Zones. Pick the one that fits.</h2>
      <p>Each zone has its own regulator, activity list and cost profile. Below is a quick tour — every card opens a full page on that zone.</p>
    </div>
    <div class="fz-grid">
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-dmcc.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/dmcc.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/dmcc.svg'); ?>" alt="DMCC Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Dubai · est. 2002</div>
        <h3>DMCC</h3>
        <div class="fz-fullname">Dubai Multi Commodities Centre</div>
        <p class="fz-tagline">The world's #1 free zone — Dubai's powerhouse for trading, commodities, crypto, fintech and family business.</p>
        <div class="fz-tags"><span class="fz-tag">Trading</span><span class="fz-tag">Commodities</span><span class="fz-tag">Family Office</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-jafza.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/jafza.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/jafza.svg'); ?>" alt="JAFZA Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Dubai · est. 1985</div>
        <h3>JAFZA</h3>
        <div class="fz-fullname">Jebel Ali Free Zone Authority</div>
        <p class="fz-tagline">The Middle East's largest free zone — purpose-built for logistics, manufacturing and re-export at scale.</p>
        <div class="fz-tags"><span class="fz-tag">Logistics</span><span class="fz-tag">Manufacturing</span><span class="fz-tag">Trade</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-difc.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/difc.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/difc.svg'); ?>" alt="DIFC Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Dubai · est. 2004</div>
        <h3>DIFC</h3>
        <div class="fz-fullname">Dubai International Financial Centre</div>
        <p class="fz-tagline">Common law, English-language regulator, and the place to be for funds, banks, fintech and law firms.</p>
        <div class="fz-tags"><span class="fz-tag">Finance</span><span class="fz-tag">Fintech</span><span class="fz-tag">Funds</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-adgm.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/adgm.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/adgm.svg'); ?>" alt="ADGM Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Abu Dhabi · est. 2015</div>
        <h3>ADGM</h3>
        <div class="fz-fullname">Abu Dhabi Global Market</div>
        <p class="fz-tagline">Abu Dhabi's international financial centre — an English common-law jurisdiction on Al Maryah Island.</p>
        <div class="fz-tags"><span class="fz-tag">Finance</span><span class="fz-tag">Family Office</span><span class="fz-tag">Holding</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-dafza.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/dafza.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/dafza.svg'); ?>" alt="DAFZA Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Dubai · est. 1996</div>
        <h3>DAFZA</h3>
        <div class="fz-fullname">Dubai Airport Free Zone</div>
        <p class="fz-tagline">The hub for fast-moving, high-value goods — co-located with Dubai International Airport.</p>
        <div class="fz-tags"><span class="fz-tag">Aviation</span><span class="fz-tag">Pharma</span><span class="fz-tag">FMCG</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-rakez.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/rakez.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/rakez.svg'); ?>" alt="RAKEZ Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Ras Al Khaimah · est. 2017</div>
        <h3>RAKEZ</h3>
        <div class="fz-fullname">Ras Al Khaimah Economic Zone</div>
        <p class="fz-tagline">The cost-effective free zone with industrial scale and emerging-business agility.</p>
        <div class="fz-tags"><span class="fz-tag">Industrial</span><span class="fz-tag">SME</span><span class="fz-tag">E-commerce</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-ifza.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/ifza.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/ifza.svg'); ?>" alt="IFZA Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Dubai · est. 2018</div>
        <h3>IFZA</h3>
        <div class="fz-fullname">International Free Zone Authority</div>
        <p class="fz-tagline">Modern, fast and entrepreneur-friendly — strong for service, consultancy and trading SMEs.</p>
        <div class="fz-tags"><span class="fz-tag">SME</span><span class="fz-tag">Service</span><span class="fz-tag">Consultancy</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-meydan.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/meydan.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/meydan.svg'); ?>" alt="MEYDAN Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Dubai · est. 2019</div>
        <h3>Meydan</h3>
        <div class="fz-fullname">Meydan Free Zone</div>
        <p class="fz-tagline">A premium Dubai address — strong for founders, consultancies and crypto-adjacent businesses.</p>
        <div class="fz-tags"><span class="fz-tag">Premium</span><span class="fz-tag">Founders</span><span class="fz-tag">Crypto</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url('free-zone-shams.html'); ?>">
        <!-- IMAGE PLACEHOLDER · replace assets/img/freezones/shams.svg with photo -->
        <div class="img-frame ar-16x9"><img src="<?php echo kingston_asset('img/freezones/shams.svg'); ?>" alt="SHAMS Free Zone" loading="lazy"/></div>
        <div class="card-body">
          <div class="fz-emirate">Sharjah · est. 2017</div>
        <h3>SHAMS</h3>
        <div class="fz-fullname">Sharjah Media City</div>
        <p class="fz-tagline">Sharjah's media-and-creative free zone — affordable, fast and friendly to digital creators.</p>
        <div class="fz-tags"><span class="fz-tag">Media</span><span class="fz-tag">Creative</span><span class="fz-tag">Digital</span></div>
        <span class="read">Setup details <span class="arrow">→</span></span>
        </div>
      </a>
    </div>
    <div class="text-center" style="margin-top:36px">
      <a href="<?php echo kingston_url('freezones.html'); ?>" class="btn btn-ghost">All UAE Free Zones &amp; comparison <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- About preview -->
<section>
  <div class="container two-col">
    <!-- IMAGE PLACEHOLDER · replace assets/img/about/team.svg with team / office photo -->
    <div class="about-image reveal">
      <div class="img-frame">
        <img src="<?php echo kingston_asset('img/about/team.svg'); ?>" alt="Kingston team and office" loading="lazy"/>
        <div class="badge">
          <div class="big">A+</div>
          <div class="lbl">Audit Quality Rating</div>
        </div>
      </div>
    </div>
    <div class="reveal">
      <span class="eyebrow">Why Kingston</span>
      <h2>A boutique firm built on the standards of a Big Four — without the Big Four overhead.</h2>
      <p>We exist to be the audit, tax and advisory partner UAE businesses can actually trust — accessible to founders, rigorous enough for boards. Our vision is to be one of the UAE's most trusted firms, recognised for integrity, technical excellence and financial transparency.</p>
      <ul class="bullets">
        <li><span class="check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span><span><strong>Partner-led engagements.</strong> A senior reviewer is on every job — no juniors flying solo.</span></li>
        <li><span class="check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span><span><strong>UAE-first expertise.</strong> Federal Tax Authority, IFRS, Free Zone &amp; Mainland — we live in this rulebook.</span></li>
        <li><span class="check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span><span><strong>Plain-English reporting.</strong> Findings boards understand and management can act on.</span></li>
      </ul>
      <a href="<?php echo kingston_url('about.html'); ?>" class="btn btn-primary mt-3">More about Kingston <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="stats">
  <div class="container">
    <div class="section-head reveal" style="margin-bottom:48px">
      <span class="eyebrow center" style="color:var(--gold-400)">By the numbers</span>
      <h2 style="color:#fff">Outcomes our clients can count on.</h2>
    </div>
    <div class="stats-grid">
      <div class="stat reveal"><div class="num"><span data-count="500">0</span><small>+</small></div><div class="label">Audits &amp; reviews completed</div></div>
      <div class="stat reveal"><div class="num"><span data-count="350">0</span><small>+</small></div><div class="label">UAE companies served</div></div>
      <div class="stat reveal"><div class="num"><span data-count="98">0</span><small>%</small></div><div class="label">On-time filing record</div></div>
      <div class="stat reveal"><div class="num"><span data-count="24">0</span><small>h</small></div><div class="label">Average response time</div></div>
    </div>
  </div>
</section>

<!-- Process -->
<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center">How we work</span>
      <h2>Four steps. Zero surprises.</h2>
      <p>A predictable, transparent engagement flow — designed so you always know what is happening, what is next and what it costs.</p>
    </div>
    <div class="process">
      <div class="step reveal"><span class="step-num">01</span><h4>Discovery</h4><p>A free, confidential scoping call to understand your business, structure, deadlines and risk areas.</p></div>
      <div class="step reveal"><span class="step-num">02</span><h4>Tailored Plan</h4><p>A fixed scope, timeline and fee — agreed in writing before a single workpaper is opened.</p></div>
      <div class="step reveal"><span class="step-num">03</span><h4>Execution</h4><p>Senior-led fieldwork with a single point of contact and weekly status updates. No silent stretches.</p></div>
      <div class="step reveal"><span class="step-num">04</span><h4>Reporting &amp; Beyond</h4><p>A clear final report, a debrief with your team, and ongoing advice for the next financial year.</p></div>
    </div>
  </div>
</section>

<!-- Values -->
<section>
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center">Our values</span>
      <h2>The principles behind every signature on our reports.</h2>
    </div>
    <div class="values">
      <div class="value reveal"><div class="v-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h4>Integrity</h4><p>We do the right thing — even when it is the difficult thing. Our independence is non-negotiable.</p></div>
      <div class="value reveal"><div class="v-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h4>Excellence</h4><p>Technically sharp, current with regulation, and obsessed with the quality of every workpaper we sign.</p></div>
      <div class="value reveal"><div class="v-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div><h4>Client focus</h4><p>You get a senior partner on speed-dial — not a ticket number in a queue.</p></div>
      <div class="value reveal"><div class="v-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div><h4>Accountability</h4><p>Fixed fees, fixed timelines, signed off in writing. We meet our commitments — or tell you why early.</p></div>
      <div class="value reveal"><div class="v-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div><h4>Confidentiality</h4><p>Your data lives in encrypted, access-controlled environments. NDAs, watertight processes, zero leakage.</p></div>
      <div class="value reveal"><div class="v-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="M12 18v4"/><path d="M4.93 4.93l2.83 2.83"/><path d="M16.24 16.24l2.83 2.83"/><path d="M2 12h4"/><path d="M18 12h4"/><path d="M4.93 19.07l2.83-2.83"/><path d="M16.24 7.76l2.83-2.83"/></svg></div><h4>Innovation</h4><p>Audit analytics, automation and AI-assisted review — modern tools applied to centuries-old standards.</p></div>
    </div>
  </div>
</section>

<!-- Testimonials slider -->
<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center">Client voices</span>
      <h2>What founders, CFOs and family offices say.</h2>
    </div>

    <div class="slider" data-slider>
      <div class="slider-viewport">
        <div class="slider-track">
          <div class="testimonial">
            <p>Kingston turned our annual audit from an annual headache into a strategic exercise. The findings were sharp, the team was responsive, and the report was ready a week ahead of deadline.</p>
            <div class="who"><div class="avatar">RA</div><div><strong>Rashid Al Mansoori</strong><span>CFO, Vertex Trading FZ-LLC</span></div></div>
          </div>
          <div class="testimonial">
            <p>We engaged Kingston for due diligence on a UAE acquisition. They flagged three issues the seller had not disclosed, and saved us materially on the deal. Worth ten times the fee.</p>
            <div class="who"><div class="avatar">PS</div><div><strong>Priya Sharma</strong><span>Managing Partner, Harbour Capital</span></div></div>
          </div>
          <div class="testimonial">
            <p>Corporate tax was new territory for us. Kingston walked our finance team through registration, structuring and the first filing — calm, clear, no jargon.</p>
            <div class="who"><div class="avatar">MK</div><div><strong>Mohammed Khalid</strong><span>Founder, Alaris Group</span></div></div>
          </div>
          <div class="testimonial">
            <p>Honest, technically excellent and refreshingly direct. They told us things our previous auditor would not — and our board is stronger for it.</p>
            <div class="who"><div class="avatar">EJ</div><div><strong>Elena Jansen</strong><span>Chair of Audit Committee, Nuwa Holdings</span></div></div>
          </div>
          <div class="testimonial">
            <p>Our DMCC licence renewal was three weeks away when we engaged Kingston. They scoped, audited and filed inside the window. Smooth, senior-led, calm under pressure.</p>
            <div class="who"><div class="avatar">FA</div><div><strong>Fatima Al Suwaidi</strong><span>CEO, Emirate Trading DMCC</span></div></div>
          </div>
          <div class="testimonial">
            <p>The AML review they ran for us was substantive, not cosmetic. Real findings, practical fixes, and we went into our regulatory inspection clear-headed.</p>
            <div class="who"><div class="avatar">DC</div><div><strong>Daniel Chen</strong><span>Compliance Officer, Bay &amp; Co.</span></div></div>
          </div>
        </div>
      </div>
      <div class="slider-nav">
        <button class="arrow-btn" data-slider-prev aria-label="Previous">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <div class="slider-dots" role="tablist"></div>
        <button class="arrow-btn" data-slider-next aria-label="Next">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- CTA banner -->
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

<!-- Footer -->
<?php get_footer();
