<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Embroidery
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    
                
                    <div class="work">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );


			endwhile; // End of the loop.
			?>
                    </div>
                   <div class="steps"> 
                    <div class="contact">
                         <?php echo wp_get_attachment_image(CFS()->get('contact_us'),'large');?>
                          <h4><?php echo CFS()->get('contact_head'); ?></h4>
                          <p><?php echo CFS()->get('contact_description'); ?></p>
                        </div>
                       <div class="contact">  
                          <?php echo wp_get_attachment_image(CFS()->get('create'), 'large');?>
                            <h4><?php echo CFS()->get('create_head'); ?></h4>
                            <p><?php echo CFS()->get('create_description'); ?></p>
                       </div>
                       <div class="contact">
                           <?php echo wp_get_attachment_image(CFS()->get('satisfy'), 'large')?>
                            <h4><?php echo CFS()->get('satisfy_head'); ?></h4>
                            <p><?php echo CFS()->get('satisfy_description'); ?></p>
                       </div>
                       
                   </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
