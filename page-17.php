<?php 

 /*
  *  Exercises
  */

 ?>

 <?php get_header(); ?>
<div class="l-banner">
	<h1 class="banner-heady">Exercises</h1>
	<?php if ( !get_field('header_description', 19) ) : ?>
		<!-- <div class="banner-description"><?php the_field('header_description', 19); ?></div> -->
	<?php endif; ?>
	<nav class="main-subpage-nav in-banner clearfix">
		<ul class="l-horizontal-nav clearfix">
			<li>
				<a href="<?php echo get_page_link(13); ?>" class="subpage-pill">Features</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(35); ?>" class="subpage-pill">Setup</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(17); ?>" class="subpage-pill active">Exercises</a>
			</li>
		</ul>
	</nav>
</div>
<div class="l-content-panel is-first expand-inner">
	<!-- <nav class="main-subpage-nav in-banner subpage-subnav clearfix">
		<ul class="l-horizontal-nav clearfix">
			<li>
				<a href="<?php echo get_page_link(35); ?>" class="subpage-pill active">Door</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(37); ?>" class="subpage-pill">Bar</a>
			</li>
			
		</ul>
	</nav> -->
	<div class="mini-banner alt-background clearfix">
		<div class="l-mini-banner-col">
			<h1>The Basic 7</h1>		
		</div>
		<div class="l-mini-banner-col squeeze-text">
			<h2 class="exercises-landing-banner-title">When to Use:</h2>
			<p>The Set of 7 adapts to your lifestyle -- so whether you have an hour or only a minute, there’s always something you can do to stay active.</p>
		</div>

		
	</div>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</div>
<article class="l-content-panel">
	<div class="exercise-row clearfix">
		<a class="exercise-thmb exercise-thmb-link-1" href="<?php echo get_page_link(80); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/exercise_thmb_1.svg" alt="" class="exercise-thmb-1"></a>
		<a class="exercise-thmb exercise-thmb-link-2" href="<?php echo get_page_link(82); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/exercise_thmb_2.svg" alt="" class="exercise-thmb-2"></a>
	</div>
	<div class="exercise-row clearfix">
		<a class="exercise-thmb exercise-thmb-link-3" href="<?php echo get_page_link(84); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/exercise_thmb_3.svg" alt="" class="exercise-thmb-3"></a>
		<a class="exercise-thmb exercise-thmb-link-4" href="<?php echo get_page_link(86); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/exercise_thmb_4.svg" alt="" class="exercise-thmb-4"></a>
	</div>
	<div class="exercise-row clearfix">
		<a class="exercise-thmb exercise-thmb-link-5" href="<?php echo get_page_link(88); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/exercise_thmb_5.svg" alt="" class="exercise-thmb-5"></a>
		<a class="exercise-thmb exercise-thmb-link-6" href="<?php echo get_page_link(90); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/exercise_thmb_6.svg" alt="" class="exercise-thmb-6"></a>
		<a class="exercise-thmb exercise-thmb-link-7" href="<?php echo get_page_link(92); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/exercise_thmb_7.svg" alt="" class="exercise-thmb-7"></a>
	</div>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>
<article class="l-content-panel video-widget-full-width">
	<div class="video-bg">
		<div class="l-video-holder video-box">
			<iframe src="//player.vimeo.com/video/92402883?title=0&amp;byline=0&amp;portrait=0&amp;player_id=vimeoplayer1" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<div class="l-video-holder video-box hidden">
			<iframe src="//player.vimeo.com/video/92378251?title=0&amp;byline=0&amp;portrait=0&amp;player_id=vimeoplayer2" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<div class="l-video-holder video-box hidden">
			<iframe src="//player.vimeo.com/video/92378281?title=0&amp;byline=0&amp;portrait=0&amp;player_id=vimeoplayer3" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div>
	<div class="l-roto-sub-nav clearfix facilities-quote-nav active-quote-nav videos-btn">
		<ul class="l-horizontal-nav">
			<li><a href="#play-progressions-level-one" class="roto-sub-pill video-pill active">Progressions - Level One</a></li>
			<li><a href="#play-progressions-level-two" class="roto-sub-pill video-pill">Progressions - Level Two</a></li>
			<li><a href="#play-progressions-level-three" class="roto-sub-pill video-pill">Progressions - Level Three</a></li>
		</ul>
	</div>
		
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>

<?php get_footer(); ?>