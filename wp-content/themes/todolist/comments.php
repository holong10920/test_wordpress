<h1>Todo</h1>

<?php  
    if( ! have_comments() ){
        echo "Leave a Comment";
    } else {
        echo get_comments_number(). "Todos";
    }
?>

<?php
    wp_list_comments(
        array(
            'avatar_size' => 0,
            'short_ping'  => true,
            'style'       => 'ol',
        )
    );
?>

<?php
    if( comments_open() ){
        comment_form(
            array(
                'class_form' => 'form_control'
            )
        );
    }
?>