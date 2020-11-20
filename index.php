<?php get_header(); ?>
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
                                | By <?php the_author(); ?></em>
                        </div>
                        <p><?php the_content(); ?></p>
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
            <div class="col-md-3">
                <?php dynamic_sidebar('right-sidebar'); ?>
                <!-- 
                    <div class="right-side">
                        <h2>Title</h2>
                        <ul>
                            <li>
                                <a href="">One</a>
                            </li>
                            <li>
                                <a href="">Two</a>
                            </li>
                            <li>
                                <a href="">Three</a>
                            </li>
                        </ul>
                    </div> -->
            </div>
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