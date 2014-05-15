<?php
/*
Template name: Busca
*/
?>
<body id="busca_page">
<?php get_header(); ?>

<div id="page center">

<div class="column span-9 first" id="maincontent">

<div class="content">
	<div class="barra_procura">
					
					<?php get_search_form(); ?>

				</div>

<?php if (have_posts()) : ?>

<h2 class="pagetitle">Resultado da buscar por "<?php echo $s ?>"</h2>

<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
</div>
<div class="clear"></div>

<?php while (have_posts()) : the_post(); ?>
			
	<div class="posts_blog">

					<ul>
 
                                   	  
                             	<li>

                             		<a href="<?php the_permalink(); ?>">
                             		
                             			<div class="post">
                          			
												  <div class="data_post">
			 
												  	<span><?php the_time('d/m Y') ?></span>

												  </div>

			                                      <img src='<?php the_field('imagem'); ?>' width="226" height="226">

				                                   	  <div class="post_name">
					                                      <p> <?php the_title(); ?></p>
					                                      <span class="op"> >> </span>

				                                      </div> 
			                                 	

		                             	</div>
		                             	<div class="borda"></div>

                             		</a>

                                </li>
                         
                                                            
							
                    </ul>


</div>

<?php endwhile; ?>

<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
</div>

<?php else : ?>

<h2 class="center">Pesquisa não encontrada</h2>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>

</div> <!-- /content -->
</div> <!-- /maincontent-->
</div> <!-- /page -->

<?php get_footer(); ?>
