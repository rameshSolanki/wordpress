<?php get_header(); ?>

<div class="row">
  <div class="col-sm-9">
<?php  get_template_part('breadcrumb'); ?>
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
        
        <h2 class="fs-1 fw-bold"><?php the_title(); ?></h2>  
       
                <?php the_content(); ?>
        
                <?php //comments_template('', true); ?>
        
            <?php endwhile; ?>      
        
        <?php else : ?>
        <article id="post-not-found" class="block">
            <p><?php _e("No pages found.", "fridayone"); ?></p>
        </article>
        
        <?php endif; ?>

    </div>
<div class="col-sm-3">
    <?php get_sidebar(); ?>
</div>
</div>  </div>
<?php get_footer(); ?>