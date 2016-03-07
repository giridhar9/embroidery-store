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
    <h2>We offer all the monogram services that you can imagine of!!</h2>
    <p>We sell a range of monogrammable clothes, towels, blankets etc., on which we embroid the favourite monogram 
    of your choice.</p>
    <p>You are welcome to bring your own items and choose your favourite monogram from the wide range of selections 
        we have. Or you can provide us the design that you would like to have on the item.</p>
    <div class="service-cost">
    <h4>COST</h4>
    <p>They say we are the most reasonable store around. Our prices for a good monogram start at a price of $9.99.</p>
    </div>
 <div class="archive">   
 <?php while ( have_posts() ) : the_post(); ?>
                <div class="archive-services">
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
                <?php endif; ?>
                 </div>
               <?php endwhile; ?>
</div>
</div>
<?php 
 get_sidebar();
 get_footer();