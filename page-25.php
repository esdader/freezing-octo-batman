<?php 

 /*
  * Our values
  */

 ?>

 <?php get_header(); ?>
<div class="l-banner">
	<h1 class="banner-heady"><?php echo get_the_title(19); ?></h1>
	<?php if ( !get_field('header_description', 19) ) : ?>
		<div class="banner-description"><?php the_field('header_description', 19); ?></div>
	<?php endif; ?>
	<nav class="main-subpage-nav in-banner clearfix">
		<ul class="l-horizontal-nav clearfix">
			<li>
				<a href="<?php echo get_page_link(21); ?>" class="subpage-pill">About Us</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(23); ?>" class="subpage-pill">Behind Primal</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(25); ?>" class="subpage-pill active">Founders Letter</a>
			</li>
		</ul>
	</nav>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if ( get_field('brians_letter_title') || get_field('brians_letter_content') ) : ?>
		<article class="l-content-panel is-first">
			<div class="l-content-panel-col-left">
				<?php if ( get_field('brians_letter_title') ) : ?>
					<div class="panel-heading-holder the-story-heading">
						<h1 class="panel-heading panel-heading-alt"><?php the_field('brians_letter_title'); ?></h1>
						<div class="arrow-pointer-alt">
							
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="l-content-panel-col-right">
				<?php if ( get_field('brians_letter_content') ) : ?>
					<?php the_field('brians_letter_content'); ?>
				<?php endif; ?>
			</div>
			<div class="panel-down-btn">
				
			</div>
			<div class="panel-up-btn">
				
			</div>
		</article>
	<?php endif; ?>
	<?php if ( !get_field('vision_title') || !get_field('vision_content') ) : ?>
		<article class="l-content-panel">
			<div class="l-content-panel-col-left">
				<?php if ( get_field('vision_title') ) : ?>
					<h1 class="panel-heading the-story-heading panel-heading-alt"><?php the_field('vision_title'); ?></h1>
				<?php endif; ?>
			</div>
			<div class="l-content-panel-col-right">
				<?php if ( get_field('vision_content') ) : ?>
					<?php the_field('vision_content'); ?>
				<?php endif; ?>
			</div>
			<div class="panel-down-btn">
				
			</div>
			<div class="panel-up-btn">
				
			</div>
		</article>
	<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
	<article class="l-content-panel is-first">
		<p>Sorr there was a problem loading the requested page</p>
		<div class="panel-down-btn">
			
		</div>
		<div class="panel-up-btn">
		
		</div>
	</article>
<?php endif; ?>

	


<?php get_footer(); ?>