<?php
/**
 * The template for displaying the about page
 */

get_header(); ?>

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="services">
		<div class="site-content">
			<div class="service-intro">
				<h2 class="services-title">Our Services</h2>
				<p class ="services-content">We take pride in our clients and the content we create for them. <br />
				Here is a brief overview of our offered services</p>
			</div>

			<ul class="about-services">

				<?php 
				$service_title_1 = get_field( "service_title_1" );
  				$service_description_1 = get_field( "service_description_1" );
  				$service_icon_1 = get_field( "service_icon_1" ); 
  				$service_size = "small"; 
  				?>
  				<li class="individual-service">
  					<figure class="img-left">
  						<?php echo wp_get_attachment_image( $service_icon_1, $service_size ); ?>
  					</figure>
	  					<h4><?php echo($service_title_1); ?></h4>
  						<p><?php echo($service_description_1); ?></p>
      			</li>

      			<?php 
				$service_title_2 = get_field( "service_title_2" );
  				$service_description_2 = get_field( "service_description_2" );
  				$service_icon_2 = get_field( "service_icon_2" ); 
  				$service_size = "small"; 
  				?>
  				<li class="individual-service">
  					<figure class="img-right">
  						<?php echo wp_get_attachment_image( $service_icon_2, $service_size ); ?>
  					</figure>
  					<h4><?php echo($service_title_2); ?></h4>
  					<p><?php echo($service_description_2); ?></p>
      			</li>

      			<?php 
				$service_title_3 = get_field( "service_title_3" );
  				$service_description_3 = get_field( "service_description_3" );
  				$service_icon_3 = get_field( "service_icon_3" ); 
  				$service_size = "small"; 
  				?>
  				<li class="individual-service">
  					<figure class="img-left">
  						<?php echo wp_get_attachment_image( $service_icon_3, $service_size ); ?>
  					</figure>
  						<h4><?php echo($service_title_3); ?></h4>
  						<p><?php echo($service_description_3); ?></p>
      			</li>

      			<?php 
				$service_title_4 = get_field( "service_title_4" );
  				$service_description_4 = get_field( "service_description_4" );
  				$service_icon_4 = get_field( "service_icon_4" ); 
  				$service_size = "small"; 
  				?>
  				<li class="individual-service">
  					<figure class="img-right">
  						<?php echo wp_get_attachment_image( $service_icon_4, $service_size ); ?>
  					</figure>
  					<h4><?php echo($service_title_4); ?></h4>
  					<p><?php echo($service_description_4); ?></p>
      			</li>
      		</ul>

		</div>
	</section>

	<section class="about-footer">
		 <div class="site-content">
		 	<?php 
		 	$call_to_action = get_field( "call_to_action" );
		 	?>
		 	<p> <?php echo($call_to_action);?> </p>
		 </div>
	</section>

<?php get_footer(); ?>
