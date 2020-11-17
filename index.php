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
    <section class="post-section">
        <div class="container">
            <?php  
            if (have_posts(  )):
                while (have_posts(  )) : the_post(  );
            ?>

            <div class="dev-article">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>

            <?php
                endwhile;
            
            else: echo 'no post';
            endif;
            ?>

        </div>
    </section>
    <footer>
        <div class="container">
            <p>@copyright | 2020 | Mainul Hasan Khan</p>
        </div>
    </footer>

    <?php wp_footer() ; ?>
</body>

</html>