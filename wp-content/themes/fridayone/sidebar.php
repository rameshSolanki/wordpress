
     <?php if (is_active_sidebar('sidebar-1')) : ?>
<div id="secondary-sidebar" class="sidebar-1">
         <?php if (function_exists('dynamic_sidebar')) {
                ob_start();
                dynamic_sidebar('sidebar-1');
                $sidebar = ob_get_contents();
                ob_end_clean();

                $blog_sidebar_corrected_ul_and_li = str_replace('<ul>', '<ul class="list-group">', str_replace('<li>', '<li class="list-group-item">', $sidebar));
                echo $blog_sidebar_corrected_ul_and_li;
         }

            ?>
</div>
     <?php endif; ?>           



<?php //the_post(); ?>
                <?php //get_template_part('content', 'page'); ?>
                 
                <?php //comments_template('', true); ?>
                 
           <!-- end home-page-content -->
             
          
                <?php
                // $category_id = get_cat_ID('code');
                // $catquery = new WP_Query('cat=' .$category_id. '&posts_per_page=5');
                // while ($catquery->have_posts()) :
                //     $catquery->the_post();
                ?>
                <h2><?php //the_title(); ?></h2>
                 
                    <?php //the_content(); ?>
                 <!--  <a href="<?php //the_permalink();?>"><?php //the_title(); ?></a>
                    <?php //echo '<hr/>'; ?> -->
                <?php //endwhile; ?>
                                 
    <?php //comments_template('', true); ?>
                 
           <!-- end home-post-content -->




          