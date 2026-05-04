<?php
/**
 * 404 — page not found.
 */
get_header();
?>
<section class="page-header">
  <div class="container">
    <span class="eyebrow" style="color:var(--gold-400)">Error 404</span>
    <h1 class="mt-2">We can't find that page.</h1>
    <p>The page you're looking for has moved or doesn't exist. Try one of the links below, or get in touch with our team.</p>
  </div>
</section>

<section>
  <div class="container">
    <div class="cta-banner">
      <div class="container cta-banner-row">
        <div>
          <span class="eyebrow" style="color:var(--gold-400)">Lost?</span>
          <h2 class="mt-2">Start from the home page or talk to a partner.</h2>
        </div>
        <div class="cta-actions">
          <a href="<?php echo kingston_url( 'index.html' ); ?>" class="btn btn-gold">Go to home <span class="arrow">→</span></a>
          <a href="<?php echo kingston_url( 'contact.html' ); ?>" class="btn btn-light">Contact us</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();
