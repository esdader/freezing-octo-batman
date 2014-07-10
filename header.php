<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="l-container clearfix">
	<header class="l-main-header clearfix">
		<a href="<?php echo site_url(); ?>" class="l-main-logo"><img src="<?php bloginfo('template_directory');?>/img/primal7_lrg_logo.svg" alt="Primal 7" class="main-logo"></a>
		<?php 
			$args = array(
					'theme_location'  => '',
					'menu'            => 'main-menu',
					'container'       => 'nav',
					'container_class' => 'main-nav clearfix',
					'container_id'    => '',
					'menu_class'      => 'l-hor-nav',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''

				);
		?>
		<?php wp_nav_menu( $args ); ?> 
	</header>