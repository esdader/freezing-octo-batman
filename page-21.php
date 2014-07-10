<?php 

 /*
  * About Us page
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
				<a href="<?php echo get_page_link(21); ?>" class="subpage-pill active">About Us</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(23); ?>" class="subpage-pill">Behind Primal</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(25); ?>" class="subpage-pill">Founders Letter</a>
			</li>
		</ul>
	</nav>
</div>
<article class="l-content-panel is-first">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="l-content-panel-col-left">
			<?php if ( get_field('section_title') ) : ?>
				<div class="panel-heading-holder the-story-heading">
					<h1 class="panel-heading panel-heading-alt"><?php the_field('section_title'); ?></h1>
					<div class="arrow-pointer-alt">
						
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="l-content-panel-col-right">
			<?php if ( get_field('section_content') ) : ?>
				<?php the_field('section_content'); ?>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
		<p>Sorry there was a problem loading the requested page</p>
	<?php endif; ?>

	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>


<?php get_footer(); ?>