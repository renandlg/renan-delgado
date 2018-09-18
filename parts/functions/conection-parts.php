<?php
/*
Funções que compõe todas as partes das páginas
 */
function logotype(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
	if(has_custom_logo()): ?>
	    <a class="navbar-brand" href="<?php get_home_url(); ?>"><img src="<?php echo esc_url($logo[0]); ?>"/></a>
	<?php else: ?>
	    <a href="<?php get_home_url(); ?>" class"navbar-brand"><img src="<?php bloginfo('template_url'); ?>/custom/icons/logo-renan-iot-default-colors.svg"/></a>
	<?php endif;
}
?>
<?php
function get_image_header(){
?>
	<img src="<?php header_image(); ?>" alt="Imagem de cabeçalho da página principal" class="card-img rounded-0"/>
<?php
}

//Implementação de menus
function navbar_top(){
	if (has_nav_menu('primary')):
		wp_nav_menu(
			'theme_location' => 'primary',
			'container'      => false,
			'depth'          => 3,
			'menu_class'     => 'navbar-nav ml-auto',
		);
	else: ?>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="#">Lorem</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ipsum</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Niqum</a></li>
		</ul><?php
	endif;
}

function navbar_part_one(){
	if (has_nav_menu('part_one')):
		wp_nav_menu(
			'theme_location' => 'part_one',
			'container'      => false,
			'depth'          => 3,
			'menu_class'     => 'nav',
		);
	else: ?>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="#">Lorem</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ipsum</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Niqum</a></li>
		</ul><?php
	endif;
}

function navbar_part_two(){
	if (has_nav_menu('part_two')):
		wp_nav_menu(
			'theme_location' => 'part_two',
			'container'      => false,
			'depth'          => 3,
			'menu_class'     => 'nav',
		);
	else: ?>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="#">Lorem</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ipsum</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Niqum</a></li>
		</ul><?php
	endif;
}

function navbar_part_three(){
	if (has_nav_menu('part_three')):
		wp_nav_menu(
			'theme_location' => 'part_three',
			'container'      => false,
			'depth'          => 3,
			'menu_class'     => 'nav',
		);
	else: ?>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="#">Lorem</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ipsum</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Niqum</a></li>
		</ul><?php
	endif;
}

function navbar_category(){
	if (has_nav_menu('category')):
		wp_nav_menu(
			'theme_location' => 'category',
			'container'      => false,
			'depth'          => 3,
			'menu_class'     => 'nav',
		);
	else: ?>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="#">Lorem</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ipsum</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Niqum</a></li>
		</ul><?php
	endif;
}
//Fim da implementação

add_filter( 'nav_menu_css_class', function($classes){
    $classes[] = 'nav-item';
    return $classes;
}, 10, 1 );

add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );


?>
