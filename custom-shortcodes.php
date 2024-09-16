<?php

function display_people($atts) {
    
    ob_start();
    get_template_part( 'global-templates/display-people', '', array('atts' => $atts) );
    return ob_get_clean();

}

add_shortcode( 'display-people', 'display_people' );

?>

<?php

function display_press() {
    ob_start();
    get_template_part( 'global-templates/display-press' );
    return ob_get_clean();

}

add_shortcode( 'display-press', 'display_press' );

?>