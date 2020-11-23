<?php get_header(); ?>
<div class="container">
    <div class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
        </header><!-- .page-header -->
        <img src="error_404.jpg" alt="error_404.jpg">
        <div class="page-content">
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?>
            </p>
            <?php get_search_form(); ?>
        </div><!-- .page-content -->
    </div><!-- .error-404 -->
</div>

<!-- Bottom menu -->
<div class="bottom-menu">
    <div class="menu">
        <?php wp_nav_menu(array('theme_location' => 'bottommenu')); ?>
    </div>
</div>
<?php get_footer(); ?>