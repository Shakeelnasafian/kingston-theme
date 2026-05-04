<?php
/**
 * Fallback template — required by WordPress.
 *
 * The Kingston theme is page-driven; this file is only used if no more
 * specific template (page-<slug>.php, page.php, front-page.php) matches.
 */
get_header();
?>
<section class="page-header">
  <div class="container">
    <span class="eyebrow" style="color:var(--gold-400)">Kingston Chartered Auditing &amp; Advisory</span>
    <h1 class="mt-2"><?php echo is_search() ? esc_html( sprintf( __( 'Search results for "%s"', 'kingston' ), get_search_query() ) ) : esc_html( wp_get_document_title() ); ?></h1>
  </div>
</section>

<section>
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <div class="post-list">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-meta"><?php echo esc_html( get_the_date() ); ?></div>
            <div class="post-excerpt"><?php the_excerpt(); ?></div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="pagination" style="margin-top:32px">
        <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
      </div>
    <?php else : ?>
      <p>No content found.</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer();
