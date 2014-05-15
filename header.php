<!DOCTYPE html>
	<html>
	<head>
			<link rel="profile" href="http://gmpg.org/xfn/11" />
			<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
			<title><?php wp_title(''); ?></title>
			<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
			<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
			<!---JAVASCRIPT-->
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/javascript.js"></script>
			<!--FECHA JAVASCRIPT-->
	</head>
	<body>
	<div id="global_topo"><!-- ABRE GLOBAL TOPO -->

		<div id="topo"><!-- ABRE TOPO -->
			
		</div><!-- FECHA TOPO -->
		
	</div><!-- FECHA GLOBAL TOPO -->
		
	</body>
</html>