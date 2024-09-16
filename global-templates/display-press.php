<?php 
   // the query
   $the_query = new WP_Query( array(
    'post_type' => 'press-link',
    'posts_per_page' => 6,
    'order' => 'ASC'
   )); 
?>
<?php if ( $the_query->have_posts() ) : ?>

<div class="display-press container px-0">
    <div class="row">

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php echo get_permalink();?>">

            <div class="col-sm-12 col-md-4 mb-3">   
                <div class="row">
                    <div class="col-sm-12">
                        
                            <div class="ratio-image-wrapper ratio ratio-1x1">
                                <?php echo get_the_post_thumbnail(); ?>
                                
                            </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 my-4">
                        <h5 class="fw-normal"><?php the_title(); ?></h5>
                    </div>
                </div>
            </div>
        </a>


    <?php endwhile; ?>
        
    </div>

</div>

<?php endif; ?>

