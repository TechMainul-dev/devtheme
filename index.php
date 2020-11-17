<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head() ; ?>
</head>

<body>
    <header class="header-area">
        <div class="header-content">
            <div class="logo">
                <img src="p09.jpg" alt="logo">
            </div>
            <div class="content">
                <h1><?php bloginfo('name'); ?></h1>
                <p><?php bloginfo('description'); ?></p>
            </div>
        </div>
    </header>

    <?php wp_footer() ; ?>
</body>

</html>