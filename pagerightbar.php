<?php 
  // Template Name: Sidebar added
 ?>
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
                                | By <?php the_author(); ?></em>
                        </div>
                        <p><?php the_content(); ?></p>
                        <?php comments_template(); ?>
                    </div>

                    <?php
                            endwhile;                        
                                else: echo 'no post';
                            endif;
                        ?>
                </section>
            </div>
            <!-- Sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>