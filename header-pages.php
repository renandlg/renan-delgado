<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/custom/icons//favicon.ico"/><![endif]-->
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/custom/icons/favicon.png"/>
		<script language="JavaScript" src="<?php bloginfo('template_url'); ?>/custom/js/jquery/jquery.min.js"></script>
		<script language="JavaScript" src="<?php bloginfo('template_url'); ?>/custom/js/jquery/jquery.slim.min.js"></script>
		<script language="JavaScript" src="<?php bloginfo('template_url'); ?>/custom/js/bootstrap/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom/css/homepage.min.css"/>
		<?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>
		<?php get_template_part('parts/navbars/navbar', 'top'); ?>
		<header class="card border-0">
			<img class="card-img rounded-0" src="<?php bloginfo('template_url'); ?>/custom/images/bck-comp-and-coffe.jpg" alt="Imagem de cabeçalho para páginas genéricas"/>
			<div class="row w-100 card-img-overlay d-flex flex-row justify-content-center text-white text-center">
				<div class="col-lg-8 col-md-6 d-flex flex-column justify-content-center">
					<h1><?php wp_title($sep = null); ?></h1>
				</div>
			</div>
		</header>
