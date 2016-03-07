<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Embroidery
 */
get_header(); ?>

<div class="services">
    <h2>Custom Logos for Businesses</h2>
    <p>We add your logo to any apparel, customized with embroidery or printing. We have served many clients,
    with custom logo embroidery services. We do take large orders and thrive for satisfaction of the clients.</p>
    
 <div class="service-cost">
    <h4>COST</h4>
    <p>Our prices for logo digitizing start at $50.</p>
    </div>
<img src="<?php echo get_template_directory_uri();?>/images/total.JPG" alt="corporate-logos">
<div class="archive">   
 <?php while ( have_posts() ) : the_post(); ?>
                <div class="archive-services">
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium' ); ?>
                <?php endif; ?>
                 </div>
               <?php endwhile; ?>
</div>
</div>
<?php 
 get_sidebar();
 get_footer();