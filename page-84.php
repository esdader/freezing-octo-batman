<?php 

 /*
  *  Gait
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
				3
			</div>
			<h1 class="exercise-title">Gait</h1>
			<div class="exercise-step-nav">
				<div class="exercise-step-count">
					<p>Step <span class="step-current-count">1</span> of <span class="step-total-count">2</span>
				</div>
				<div class="exercise-step-dot-count clearfix">
					<ul class="l-hor-nav clearfix">
						<li><a href="#next-step" class="step-dot active">Next step</a></li>
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
				<h2>Primal 7 position:</h2>
				<p><em>Optional: Place the rings out of the way by looping ring hook (located just above the ring) on the  nine hook (located behind the tension release lever).</em></p>
				<ol>
					<li><strong>PLACE</strong> - Walk forward into the band and place it low around your hips. Stand with feet hip-width apart.</li>
					<li><strong>LEAN</strong> - Lean into the band, stretching it tight.</li>
					<li><strong>STRIDE</strong> - Walk or run, keeping pressure on the band.</li>
				</ol>
				<h2>Body position:</h2>
				<ol>
					<li>Keep the line of your body straight and upright (from the top of your head to the base of your sacrum).</li>
					<li>While walking or running, try to propel your body forward so that the band is the only thing holding you in place.</li>
				</ol>
			</div>
			<div class="l-exercise-image-col">
				<div class="exercise-img-viewer">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/gait_step-1.svg" alt="" class="exercise-img current-exercise">
					<img src="<?php echo bloginfo('template_directory'); ?>/img/exercises/gait_step-2.svg" alt="" class="exercise-img hidden">
				</div>
			</div>
		</section>
		<section class="l-exercise-video">
			<div class="video-bg">
				<div class="l-video-holder video-box">
					<iframe src="//player.vimeo.com/video/92964167?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vimeoplayer" width="750" height="422" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></iframe>
				</div>
				<div class="l-video-holder video-box hidden">
					<iframe src="//player.vimeo.com/video/92964165?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vimeoplayer1" width="750" height="422" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="l-video-holder video-box hidden">
					<iframe src="//player.vimeo.com/video/92964166?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vimeoplayer1" width="750" height="422" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
			<div class="l-roto-sub-nav clearfix facilities-quote-nav active-quote-nav videos-btn">
				<ul class="l-horizontal-nav">
					<li><a href="#play-progressions-level-one" class="roto-sub-pill video-pill active">Gait - Level One</a></li>
					<li><a href="#play-progressions-level-two" class="roto-sub-pill video-pill">Gait - Level Two</a></li>
					<li><a href="#play-progressions-level-three" class="roto-sub-pill video-pill">Gait - Level Three</a></li>
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