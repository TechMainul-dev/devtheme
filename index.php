<?php get_header(); ?>
<div class="container">
    <div class="our-search-form">
        <?php get_search_form(); ?>
    </div>
</div>
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
                        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                        <!-- Feature image -->
                        <?php 
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail("large");
                                }
                            ?>
                        <!-- Date -->
                        <div class="post-date">
                            <em>
                                <?php echo get_the_date(); ?>
                                | By <?php the_author(); ?>
                                |
                                <?php comments_popup_link('no comment', 'one comment', '% comments', 'comments', 'unavailable'); ?>
                            </em>
                        </div>
                        <?php devtheme_continue(40); ?>
                        <a href="<?php the_permalink();?>">Continue Reading</a>
                        <!--nextpage-->
                        <!--added under text-->
                    </div>

                    <?php
                            endwhile;                        
                                else: echo 'no post';
                            endif;
                        ?>
                    <!-- Pagination function & Hook -->
                    <div class="pagination">
                        <?php the_posts_pagination(array(
                                'screen_reader_text' => ' ',
                                'prev_text' => '<',
                                'next_text' => '>'
                            )); ?>
                    </div>

                </section>
            </div>
            <!-- Sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- Bottom menu -->
<div class="bottom-menu">
    <div class="menu">
        <?php wp_nav_menu(array('theme_location' => 'bottommenu')); ?>
    </div>
</div>
<?php get_footer(); ?>