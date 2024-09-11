<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-darkest text-white" id="wrapper-footer">
<footer class="site-footer" id="colophon">


	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-4">
                <h3 class="text-uppercase">A Long Walk Home</h3>
			</div><!-- col -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3">
                        <?php $locations = get_nav_menu_locations();
                        $menu = wp_get_nav_menu_object( $locations['social-menu'] );
                        echo '<div class="text-uppercase fw-bold mb-2">' . wp_kses_post( $menu->name ) . '</div>'; ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?>
                    </div>
                    <div class="col-md-5">
                        <?php $locations = get_nav_menu_locations();
                        $menu = wp_get_nav_menu_object( $locations['footer-menu'] );
                        echo '<div class="text-uppercase fw-bold mb-2">' . wp_kses_post( $menu->name ) . '</div>'; ?>
                        <?php echo wp_get_nav_menu_object("footer-menu" ); ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                    </div>
                    <div class="col-md-4">
                        <?php dynamic_sidebar( 'footer-contact' ); ?>
                    </div>    
                </div>
            </div>

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->
    </footer><!-- #colophon -->
</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

