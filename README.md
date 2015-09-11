# Boilerplate functional wordpress
Functional wordpress template blank! 
ready to develop your website.

<h5>useful functions</h5>

<h6>Loop post</h6>

<?php while (have_posts()) : the_post(); ?>
--- POST ---
<?php endwhile;  wp_reset_query(); ?>


<h6>Category filter query</h6>

<?php query_posts('cat=ID, ID, ID');?>


<h6>content limit post</h6>

<?php echo wp_trim_words( get_the_excerpt(), 50 ); ?>

