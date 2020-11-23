<?php get_header(); ?>
<div class="container">
    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'devtheme' ); ?>
    </p>
    <?php get_search_form(); ?>
    <div class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'devtheme' ); ?></h1>
        </header><!-- .page-header -->
        <img src="<?php echo get_template_directory_uri(); ?>/error_404.jpg" alt="error_404.jpg">
        <div class="page-content">


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