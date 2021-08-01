<?php get_header(); ?>

<div class="row">
  <div class="col-sm-9">
      <?php  get_template_part('breadcrumb'); ?>

        <div class="block block-title">
            <h1><?php echo _x("Search for:", "label", "simple-bootstrap"); ?> <?php echo esc_attr(get_search_query()); ?></h1>
        </div>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) :
                the_post(); ?>
        <h2 class="fs-1 fw-bold"><?php the_title(); ?></h2>  
       
                <?php the_content(); ?>
        
            <?php endwhile; ?>  
        
        
        
        <?php else : ?>
        <!-- this area shows up if there are no results -->
        
        <article id="post-not-found" class="block">
            <p><?php _e("No items found.", "fridayone"); ?></p>
        </article>
        
        <?php endif; ?>

     </div>
<div class="col-sm-3">
    
    <?php get_sidebar("left"); ?>
    <?php get_sidebar("right"); ?>

</div></div>

<?php get_footer(); ?>