<?php 

 /*
  * Product landing
  */

 ?>

 <?php get_header(); ?>
<div class="l-banner">
	<h1 class="banner-heady">Product</h1>
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
				<a href="<?php echo get_page_link(17); ?>" class="subpage-pill">Exercises</a>
			</li>
		</ul>
	</nav>
</div>
<article class="l-content-panel is-first">
	<div class="l-content-panel-col-left">
		<h1 class="panel-heading">The Product</h1>
		<section class="product-section-overview">
			<img src="<?php bloginfo('template_directory'); ?>/img/the_unit.jpg" alt="Primal 7 unit">
		</section>
	</div>
	<section class="l-content-panel-col-right">
		<h1 class="section-content-title">Improving functional capacity in the seven patterns of human movement</h1>

		<p>Primal 7 is an intuitive workout system that supports bodyweight to promote and enhance functional movement. Designed with simplicity and versatility in mind, Primal 7 comes ready-to-use out of the box, with attachment options for overhead or door setups. The system is comprised of maintenance-free parts including durable straps, over-molded rings, and three interchangeable neoprene bands that combine to provide a comprehensive tool for functional training.</p>

		<p>By offsetting bodyweight, providing governed stability, and guiding proper form, Primal 7 enables almost anyone to achieve a full range of motion.</p>

		<h2 class="section-content-sub-title">Every Move.</h2>

		<p>The versatility of Primal 7 allows for a virtually unlimited number of movements. This means patients and fitness users have the freedom of movement needed to push past physical limitations and achieve new heights. For therapists and coaches, Primal 7 opens the doors to limitless creativity when designing exercises and workout regimens tailored to meet the needs of clients.</p>

		<h2 class="section-content-sub-title">Every Body.</h2>
		
		<p>From basic training to rehab centers to gyms and homes, Primal 7 promises to enable beginners, those with disabilities, and even the elite athlete the ability to engage in strength training that will change their lives. Regardless of body type, fitness level, health or physical condition, Primal 7 grants access for all to achieve greater physical strength, mobility and flexibility. Most importantly, every movement on Primal 7 keeps the core engaged, which means greater balance, stability, and enhanced core strength.</p>

		<h2 class="section-content-sub-title">Anywhere.</h2>
		
		<p>By integrating lightweight material and flexible attachment options, the Primal 7 unit is designed to promote a secure and easy-to-use interaction. The system is ready to use out of box with easy horizontal or vertical mounting options for varying levels of assistance. Best of all, Primal 7 was designed for ultimate portability, from doors to rails, to trees, and even a tractor, the unit can be attached to any stable structure.</p>

	</section>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>
<?php get_footer(); ?>