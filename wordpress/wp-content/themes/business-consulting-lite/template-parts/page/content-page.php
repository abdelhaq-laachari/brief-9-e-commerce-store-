<?php
/**
 * Template part for displaying page content in page.php
 *
 * @subpackage Business Consulting Lite
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>
	</header>
	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<p><?php the_content(); ?></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'business-consulting-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>