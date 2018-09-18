<?php
/*
Template Name: Página para o blog
 */
?>
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
			<img class="card-img rounded-0" src="<?php bloginfo('template_url'); ?>/custom/images/bck-blog.jpg" alt="Imagem para cabeçalho do blog oficial"/>
			<div class="row w-100 card-img-overlay d-flex flex-row justify-content-center text-white text-center">
				<div class="col-lg-8 col-md-6 d-flex flex-column justify-content-center">
					<h1>Bem vindo ao meu blog oficial</h1>
					<p>Aqui você vai encontrar artigos super interessantes, desde dicas para manter o seu negócio saudável, até técnicas importantes para agradar o <em>titio Google</em></p>
				</div>
			</div>
		</header>
		