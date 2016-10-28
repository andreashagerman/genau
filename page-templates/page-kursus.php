<?php
/**
 * Template Name: Kursus Page Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
		<div id="second-content">
			
			<div class="second">
			<h2>Kurser</h2>
			<ul>
				<?php 
				 $args = array(
				    'depth'        => 0,
				    'date_format'  => get_option('date_format'),
				    'child_of'     => 179,   //N here should be replaced by your About-us page ID. 
				    'title_li'     => __(''),   //here you can mention any title you like for the list that's echoed by this function
				    'echo'         => 1,
				    'sort_column'  => 'menu_order',
				    'post_type'    => 'page',
				    'post_status'  => 'publish' 
				); 
				wp_list_pages( $args );  
				?>
			</ul>
			
			<div class="kalender">

			<?php if( get_field('secondoverskrift') ): ?>
			<h3><?php the_field('secondoverskrift'); ?></h3>
			<?php endif; ?>
		
			<?php if( get_field('secondtext') ): ?>
			<?php the_field('secondtext'); ?>
			<?php endif; ?>

			</div> <!-- kalender !-->

			</div><!-- second !-->

		</div><!-- #second-content !-->
		
			
		
		
		
		
	</div><!-- #primary -->

<?php get_footer(); ?>