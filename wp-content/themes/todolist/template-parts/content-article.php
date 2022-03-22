<div class="container">
    <header class="content-header">
        <div class="meta mb-3 d-flex">
            <div class="d-flex align-items-center me-3 pe-3 border-end">
                <ion-icon name="timer-outline"></ion-icon>
                <span class="date ps-1"><?php the_date(); ?></span>
            </div>
            <div class="d-flex align-items-center me-3 pe-3 border-end">
                <ion-icon name="bookmark-outline"></ion-icon>
                <span class="tag ps-1"><?php the_tags(); ?></span>
            </div>
            <div class="d-flex align-items-center me-3 pe-3 border-end">
                <ion-icon name="copy-outline"></ion-icon>
                <span class="tag ps-1"><?php
                    if(comments_number() === 1){
                        echo comments_number()." Todo";
                    }else{
                        echo comments_number()." Todos";
                    }
                ?> </span>
            </div>

        </div>
    </header>
    <?php
        the_content();
    ?>

    <?php
        comments_template();
    ?>

</div>