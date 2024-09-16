<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row align-items-end">

            <div class="col-md-8">
                <h1>Press</h1>
            </div>

            <div class="col-md-4">
                <div class="press-contact"><?php dynamic_sidebar( 'press-contact' ); ?></div>
            </div>

        </div>


        <?php if ( have_posts() ) : ?>


    <div class="row">

    <?php while ( have_posts() ) : the_post(); ?>

            <div class="col-sm-12 col-md-4 mb-3 post-wrapper">   
            <?php 
                $link = get_field('link');?>

            <a href="<?php echo esc_url( $link ); ?>">
                <div class="row">
                    <div class="col-sm-12">
                        
                            <div class="ratio-image-wrapper ratio ratio-4x3">
                                <?php echo get_the_post_thumbnail(); ?>
                                
                            </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-3 mb-4">
                        <p class="date"><?php echo get_the_date( 'F j, Y' ); ?></p>
                        <h6><?php echo esc_html( get_field('publication_title') ); ?></h6>
                        <p><?php the_title(); ?></p>
                        <?php if( get_field('author') ): ?>
                        <p>by <?php echo esc_html( get_field('author') ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                </a>

            </div>



    <?php endwhile; ?>


    <?php wp_reset_postdata(); ?>
        
<?php endif; ?>

<div class="d-flex justify-content-center"><?php wp_pagenavi(); ?></div>
        </div>
    </div>

</div>

<?php
get_footer();
