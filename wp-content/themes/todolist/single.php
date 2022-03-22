<?php
    get_header();
?>

<div class="container my-3">
    <div class="row">
        <div class="col-sm-3 border-end border-2">               
            <?php
                get_sidebar('menu');
            ?>
        </div>

        <div class="col-sm-9">
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        
                        get_template_part('template-parts/content','article');

                    }
                }
            ?>
        </div>

    </div>
</div>

<?php
    get_footer();
?>
