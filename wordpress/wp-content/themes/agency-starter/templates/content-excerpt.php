<?php
/**
 * The template part for displaying single posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<?php agency_starter_excerpt(); ?>

	<?php agency_starter_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_excerpt();

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'agency-starter' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'agency-starter' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'templates/author' );
			}
			?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer vertical-center">
		<?php agency_starter_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'agency-starter' ),
					esc_html(get_the_title())
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
	</footer><!-- .entry-footer -->	

</article><!-- #post-<?php the_ID(); ?> -->
