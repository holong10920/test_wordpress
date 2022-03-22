<?php 
    wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap'     => '<ul class="list-unstyled mb-3 pb-3 border-bottom">%3$s</ul>'
        )
    );
?>
