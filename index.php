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
            <div class="dev-article">
                <h2>2nd Post Title</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
            <div class="dev-article">
                <h2>1st Post Title</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum</p>

            </div>
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