<?php 

 /*
  * Behind Primal
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
				<a href="<?php echo get_page_link(23); ?>" class="subpage-pill active">Behind Primal</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(25); ?>" class="subpage-pill">Founders Letter</a>
			</li>
		</ul>
	</nav>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if ( get_field('section_intro') ) : ?>
		<article class="l-content-panel is-first full-left-col">
			<div class="l-content-panel-col-left">
				<div class="panel-heading-holder behind-primal-heading">
					<h1 class="panel-heading panel-heading-alt"><?php the_title(); ?></h1>
					<div class="arrow-pointer-alt">
						
					</div>
				</div>
				<div class="image-grid">
					<div class="image-grid-row">
						<div class="image-grid-full-img behind-primal-one">
							
						</div>
					</div>
					<div class="image-grid-row">
						<div class="image-grid-half-img image-grid-tall-img behind-primal-two">
							
						</div>
						<div class="image-grid-quarter-img image-grid-pull-right behind-primal-three">
							
						</div>
						<div class="image-grid-quarter-img image-grid-pull-right  behind-primal-four">
							
						</div>
					</div>
					<div class="image-grid-row">
						<div class="image-grid-full-img  behind-primal-five">
							
						</div>
					</div>
					<div class="image-grid-row">
						<div class="image-grid-half-img behind-primal-six">
							
						</div>
						<div class="image-grid-half-img behind-primal-seven image-grid-pull-right">
							
						</div>
					</div>
				</div>
			</div>
			<div class="l-content-panel-col-right">
				<section>
					<?php if ( get_field('section_heading') ) : ?>
						<h1 class="section-content-title"><?php the_field('section_heading'); ?></h1>
					<?php endif; ?>
					<?php if ( get_field('section_intro') ) : ?>
						<div class="section-content-intro"><?php the_field('section_intro'); ?></div>
					<?php endif; ?>
					<?php if( have_rows('section_content') ): ?>
						<?php while ( have_rows('section_content') ) : the_row(); ?>
							<?php if ( get_sub_field('sub_section_title') ) : ?>
								<h2 class="section-content-sub-title"><?php the_sub_field('sub_section_title'); ?></h2>
							<?php endif; ?>
							<?php if ( get_sub_field('sub_section_content') ) : ?>
								<?php the_sub_field('sub_section_content'); ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</section>
			</div>
			<div class="panel-down-btn">
				
			</div>
			<div class="panel-up-btn">
		
			</div>
		</article>
	<?php endif; ?>
	<?php if ( get_field('vision_title') || get_field('vision_content') ) : ?>
		<article class="l-content-panel is-first">
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