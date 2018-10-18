<?php
/**
 * The template for displaying the Case Studies archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field( "services" );
				$client = get_field( "client" );
				$link = get_field( "link" );
				$image_1 = get_field( "image_1" );
				$size = "large"; 

			?>

		<article class="case-study-archive">
			<aside class="case-study-archive-sidebar">
				<h1><?php the_title(); ?></h1>
				<h4><?php echo $services; ?></h4>
				<?php the_content(); ?>	
				<p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project›</a></p>
			</aside>
			<div class="case-study-archive-img">
				<?php if($image_1){
					echo wp_get_attachment_image( $image_1, $size );
				} ?>
			</div>
		</article>
	<?php endwhile; // end of the loop. ?>

	</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
