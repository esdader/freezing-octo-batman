<?php 

 /*
  *  Pull-up
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
			<p>Always begin in the neutral position, with the Primal 7 band hanging loose on the floor.</p>
		</div>

		
	</div>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</div>
<article class="l-content-panel">
	<div class="l-exercise">
		<header class="exercise-header">
			<div class="exercise-count">
				1
			</div>
			<h1 class="exercise-title">Pull-up</h1>
			<div class="exercise-step-nav">
				<div class="exercise-step-count">
					<p>Step <span class="step-current-count">1</span> of <span class="step-total-count">	8</span>
				</div>
				<div class="exercise-step-dot-count clearfix">
					<ul class="l-hor-nav clearfix">
						<li><a href="#next-step" class="step-dot active">Next step</a></li>
						<li><a href="#next-step" class="step-dot">Next step</a></li>
						<li><a href="#next-step" class="step-dot">Next step</a></li>
						<li><a href="#next-step" class="step-dot">Next step</a></li>
						<li><a href="#next-step" class="step-dot">Next step</a></li>
						<li><a href="#next-step" class="step-dot">Next step</a></li>
						<li><a href="#next-step" class="step-dot">Next step</a></li>
						<li><a href="#next-step" class="step-dot">Next step</a></li>
					</ul>
				</div>
				<div class="step-prev-next">
					<a href="#previous-step" class="exercise-prev ir">Previous step</a>
					<a href="#next-step" class="exercise-next ir">Next step</a>
				</div>
			</div>
		</header>
		<section class="exercise-body clearfix">
			<div class="l-exercise-info-col">
				<!-- <div class="l-roto-sub-nav exercise-sub-nav clearfix">
					<ul class="l-horizontal-nav">
						<li><a href="#show-bar-use" class="roto-sub-pill exercise-pill video-pill active">Bar</a></li>
						<li><a href="#show-door-use" class="roto-sub-pill exercise-pill video-pill">Door</a></li>
					</ul>
				</div> -->
				<h2>Primal 7 position:</h2>
				<ol>
					<li><strong>STEP</strong> - Step one foot into middle of the band, placing it under arch of foot.</li>
					<li><strong>PULL</strong> - Pull ring straps while bending knee up to hip height. (<em>Note: If there is any pressure on the band, the straps will not respond. Keep foot light on band</em>).</li>
					<li><strong>STAND</strong> - Step down, putting pressure on band until it reaches the floor. Step in with other foot. Grab bar with both hands.</li>
				</ol>

				<h2>Body position:</h2>
				<ol>
					<li>Place hands on bar, heels directly under hips, and keep your core tight.</li>
					<li>Control your movement; do not allow your body swing.</li>
					<li>Pull your chin over the bar; pause; slowly lower. Repeat.</li>
				</ol>
				<h2>Dismount:</h2>
				<ol>
					<li><strong>STEP</strong> – Keep hands on bar, leave one foot on the band to maintain pressure. Step back with your other foot (Note: if you cannot reach the floor while maintaining hold of the bar, carefully grab hold of the straps before lowering your foot to the ground).</li>
					<li><strong>RELEASE</strong> - Slowly lift tension release levers.</li>
					<li><strong>STAND</strong> – Press down on band with foot until it reaches the floor.</li>
				</ol>
			</div>
			<div class="l-exercise-image-col">
				<div class="exercise-img-viewer">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/pull_up_bar_step-1.svg" alt="" class="exercise-img current-exercise">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/pull_up_bar_step-2.svg" alt="" class="exercise-img hidden">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/pull_up_bar_step-3.svg" alt="" class="exercise-img hidden">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/pull_up_bar_step-4.svg" alt="" class="exercise-img hidden">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/pull_up_bar_step-5.svg" alt="" class="exercise-img hidden">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/pull_up_bar_step-6.svg" alt="" class="exercise-img hidden">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/pull_up_bar_step-7.svg" alt="" class="exercise-img hidden">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/pull_up_bar_step-8.svg" alt="" class="exercise-img hidden">
				</div>
			</div>
		</section>
		<section class="l-exercise-video">
			<div class="video-bg">
				<div class="l-video-holder video-box">
					<iframe src="//player.vimeo.com/video/92964325?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vimeoplayer" width="750" height="422" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></iframe>
				</div>
				<div class="l-video-holder video-box hidden">
					<iframe src="//player.vimeo.com/video/92964324?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vimeoplayer1" width="750" height="422" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="l-video-holder video-box hidden">
					<iframe src="//player.vimeo.com/video/92964323?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vimeoplayer1" width="750" height="422" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
			<div class="l-roto-sub-nav clearfix facilities-quote-nav active-quote-nav videos-btn">
				<ul class="l-horizontal-nav">
					<li><a href="#play-progressions-level-one" class="roto-sub-pill video-pill active">Pull Up - Level One</a></li>
					<li><a href="#play-progressions-level-two" class="roto-sub-pill video-pill">Pull Up - Level Two</a></li>
					<li><a href="#play-progressions-level-three" class="roto-sub-pill video-pill">Pull Up - Level Three</a></li>
				</ul>
			</div>
			
		</section>
		<a href="<?php echo get_page_link(17); ?>" class="exercise-close-btn ir">Close exercise</a>
	</div>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>

<?php get_footer(); ?>