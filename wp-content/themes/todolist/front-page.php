<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        wp_head();
    ?>
</head>
<body>
    <?php
        get_header();
    ?>

    <div class="container my-3">
        <div class="row">
            <div class="col-sm-3 border-end border-2">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-info">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-info">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-info">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-info">Link 4</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-9">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            the_content();
                        }
                    }
                ?>
            </div>

        </div>
    </div>

    <?php
        get_footer();
    ?>
</body>
</html>