<?php
/**
 * The template for displaying archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Primer
 * @since 1.0.0
 */
get_header() ?>

<section id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="archive-header">

			<h1 class="archive-title"><?php the_archive_title() ?></h1>

			<?php if ( get_the_archive_description() ) : ?>

				<div class="archive-description"><?php the_archive_description() ?></div>

			<?php endif; ?>

		</header><!-- .page-header -->

		<?php while ( have_posts() ) : the_post() ?>

			<?php get_template_part( 'content', get_post_format() ) ?>

		<?php endwhile; ?>

		<?php primer_paging_nav() ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ) ?>

	<?php endif; ?>

	</main><!-- #main -->

</section><!-- #primary -->

<?php get_sidebar() ?>

<?php get_sidebar( 'tertiary' ) ?>

<?php get_footer() ?>
