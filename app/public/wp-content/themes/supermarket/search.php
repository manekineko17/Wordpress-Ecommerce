<?php
/**
 * The template for displaying search results.
 *
 * @package Theme Freesia
 * @subpackage Supermarket
 * @since Supermarket 1.0
 */
get_header(); ?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			if( have_posts() ) { ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'supermarket' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="blog-wrap">
					<?php while( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content', 'excerpt' );
					}
				} else { ?>
				<h2 class="entry-title">
					<?php get_search_form(); ?>
					<p>&nbsp; </p>
					<?php esc_html_e( 'No Posts Found.', 'supermarket' ); ?>
				</h2>
				<?php }
				get_template_part( 'pagination', 'none' ); ?>
			</div>
		</main><!-- end #main -->
	</div> <!-- #primary -->
<?php
get_sidebar();
?>
</div><!-- end .wrap -->
<?php
get_footer();