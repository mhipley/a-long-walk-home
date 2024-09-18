
<div class="row mt-4 display-people">

    <?php
    $atts = shortcode_atts( array(
        'category' => '',
    ), $args['atts'], 'atributes' );
    $args = array(
        'post_type' => 'person',
        'posts_per_page' => -1,
        'category_name' => $atts['category'],
        'order' => 'ASC'
    );
    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-sm-6 col-md-4 pb-4">
            
                <div class="ratio-image-wrapper ratio ratio-1x1 pb-2">
                <?php 

                if ( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail('large');?>
                <?php endif; ?>
                </div>
                
            
                <p><?php the_title(); ?></p>
                <p><?php echo esc_html( get_field('title') ); ?><p>
            </div>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php endif; ?>
</div>