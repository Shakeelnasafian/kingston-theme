<?php
/**
 * Template Name: Theme Options (Kingston)
 *
 * This page is a container for site-wide ACF settings (top bar, brand,
 * header nav, footer columns, CTA banner). It is not meant to be visited
 * publicly — set the page status to "Draft" or "Private" once you've
 * filled in the fields.
 */
get_header();
?>
<section class="page-header">
  <div class="container">
    <span class="eyebrow" style="color:var(--gold-400)">Theme Options</span>
    <h1 class="mt-2">This page is a container for theme settings.</h1>
    <p>It does not need to be published. Edit it from the WP admin to manage site-wide content (top bar, header, footer, CTA banner). You can safely set it to <em>Draft</em> or <em>Private</em>.</p>
    <?php if ( current_user_can( 'edit_posts' ) ) : ?>
      <a class="btn btn-gold mt-3" href="<?php echo esc_url( get_edit_post_link() ); ?>">Edit theme options →</a>
    <?php endif; ?>
  </div>
</section>
<?php get_footer();
