<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ; ?>
</head>

<body>
    <header class="header-area">
        <div class="header-content">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="content">
                <h1><?php bloginfo('name'); ?></h1>
                <p><?php bloginfo('description'); ?></p>
            </div>
        </div>
    </header>
    <div class="dev-body">
        <div class="container">
            <div class="row">
                <!-- Post -->
                <div class="col-md-9">
                    <section class="post-section">

                        <?php  
                            if (have_posts(  )):
                                while (have_posts(  )) : the_post(  );
                        ?>

                        <div class="dev-article">
                            <h2><?php the_title(); ?></h2>
                            <?php 
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail("large", array(
                                        "class" => "classname"
                                    ));
                                }
                            ?>
                            <p><?php the_content(); ?></p>
                        </div>

                        <?php
                            endwhile;                        
                                else: echo 'no post';
                            endif;
                        ?>
                    </section>
                </div>
                <!-- Sidebar -->
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>@copyright | 2020 | Mainul Hasan Khan</p>
        </div>
    </footer>

    <?php wp_footer() ; ?>
</body>

</html>