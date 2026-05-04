<?php
/**
 * Default page template.
 *
 * Used when a Page does not have a more specific template (page-<slug>.php
 * or a Template Name-assigned template). Renders the page's editor content
 * inside the Kingston site chrome.
 */
get_header();
?>
<section class="page-header">
  <div class="container">
    <?php if ( have_posts() ) : the_post(); ?>
      <span class="eyebrow" style="color:var(--gold-400)">Kingston</span>
      <h1 class="mt-2"><?php the_title(); ?></h1>
    <?php endif; ?>
  </div>
</section>

<section>
  <div class="container">
    <div class="page-content">
      <?php
      if ( have_posts() ) {
          rewind_posts();
          while ( have_posts() ) {
              the_post();
              the_content();
          }
      }
      ?>
    </div>
  </div>
</section>
<?php get_footer();
