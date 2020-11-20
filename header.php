<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ; ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-area">
        <div class="header-content">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="content">
                <h1><?php bloginfo('name'); ?></h1>
                <p><?php bloginfo('description'); ?></p>
                <!-- Top menu  -->
                <div class="menu">
                    <?php wp_nav_menu(array('theme_location' => 'topmenu')); ?>
                </div>
            </div>
        </div>
    </header>