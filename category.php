<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<body id="busca_categorias">
<?php get_header(); ?>


		<?php if ( have_posts() ) : ?>
			
	<div class="bg_conteudo">
		<div class="container conteudo">
		<section class="eight columns">

			<div class="category_name">
					<h1 class="archive-title"><?php printf( __( 'Categoria: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</div>


			<?php while (have_posts()) : the_post(); ?>
			
				<?php include(TEMPLATEPATH . '/post.php'); ?>

			<?php endwhile; ?>

		</section>

		<?php include(TEMPLATEPATH . '/aside.php'); ?>
		
	</div>
	</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	<div class="pagination">
				<!-- Older/Newer Pagination -->
				<?php if ($wp_query->max_num_pages > 1) : ?>
				    <?php next_posts_link( __( '<span class="arrow arrow_left"><i class="fa fa-chevron-left"></i></span>' ) ); ?>
				    <?php previous_posts_link( __( '<span class="arrow arrow_right"><i class="fa fa-chevron-right"></i></span>' ) ); ?>
				<?php endif; ?>
				<!-- /Older/Newer Pagination -->

				<?php
				/* PageNavi at Bottom */
				    if (function_exists('wp_pagenavi')){wp_pagenavi();}
				    $wp_query = null;
				    $wp_query = $temp;
				    wp_reset_query();
				?>
			</div>


<?php get_footer(); ?>