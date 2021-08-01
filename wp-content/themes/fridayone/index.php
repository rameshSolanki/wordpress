<?php get_header(); ?>

<?php if (is_front_page()) { ?>
          <div class="mb-5 mx-auto text-center" style="max-width: 32rem;">
            <div class="mb-5">
              <h2 class="mb-3 fs-1 fw-bold">
                <span>The quick</span>
                <span class="text-primary">brown fox</span>
                <span>jumps over the lazy dog.</span>
              </h2>
              <p class="lead text-muted mb-0">The quick brown fox jumps over the lazy dog.</p>
            </div>
            <div><a class="btn btn-primary mr-2" href="#">Check Now</a><a class="btn btn-outline-primary" href="#">Documentation</a></div>
          </div>
          <div class="position-relative text-center mx-auto mb-5" style="max-width: 48rem;">
            <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/elements/pattern-small.png" alt="">
            <div class="position-absolute" style="top: 3%; left: 9%; width: 82%; height: 90%;"><img class="img-fluid d-block mx-auto" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/elements/app-mockup.png" alt=""></div>
          </div>
          <div class="row justify-content-center align-items-center pt-2">
            <div class="col-6 col-md-4 col-lg-2 mb-5 text-center"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/logos/brands/tesla.svg" alt=""></div>
            <div class="col-6 col-md-4 col-lg-2 mb-5 text-center"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/logos/brands/facebook.svg" alt=""></div>
            <div class="col-6 col-md-4 col-lg-2 mb-5 text-center"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/logos/brands/marvel.svg" alt=""></div>
            <div class="col-6 col-md-4 col-lg-2 mb-5 text-center"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/logos/brands/nike.svg" alt=""></div>
            <div class="d-none d-md-block col-md-4 col-lg-2 mb-5 text-center"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/logos/brands/airbnb.svg" alt=""></div>
          </div>
        </div>
        <div class="d-none fixed-top top-0 bottom-0" id="sideMenuHeaders01">
          <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-dark" style="opacity: 0.7"></div>
          <nav class="navbar navbar-light position-absolute top-0 bottom-0 left-0 w-75 pt-3 pb-4 px-4 bg-white" style="overflow-y: auto;">
            <div class="d-flex flex-column w-100 h-100">
              <div class="d-flex justify-content-between mb-4">
                <a href="#"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/logos/metis/metis.svg" alt="" width="106"></a>
                <button class="btn-close" type="button" data-toggle="side-menu" data-target="#sideMenuHeaders01" aria-controls="sideMenuHeaders01" aria-label="Close"></button>
              </div>
              <div>
                <ul class="navbar-nav mb-4">
                 <?php if (has_nav_menu('header-menu')) {
                        wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu_class'    => 'navbar-nav position-absolute top-50 left-50 translate-middle',
                        'list_item_class'  => 'nav-item',
                        'link_class'   => 'nav-link m-2 menu-item nav-active'

                        ));
                 } ?>
                </ul>
                <div class="border-top pt-4 mb-5"><a class="btn btn-outline-primary w-100 mb-2" href="#">Log in</a><a class="btn btn-primary w-100" href="#">Sign up</a></div>
              </div>
              <div class="mt-auto">
                <p>
                  <span>Get in Touch</span>
                  <a href="#">info@example.com</a>
                </p>
                <a class="mr-2" href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/icons/facebook-blue.svg" alt=""></a><a class="mr-2" href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/icons/twitter-blue.svg" alt=""></a><a class="mr-2" href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/icons/instagram-blue.svg" alt=""></a>
              </div>
            </div>
          </nav>
        </div>
      </section>
    
      <section class="py-5 overflow-hidden">
        <div class="container py-5">
          <div class="row">
            <div class="position-relative col-12 col-lg-6 order-last order-lg-first mt-5 mt-lg-0"><img class="img-fluid position-relative mx-auto rounded w-100" style="z-index:10" src="https://images.unsplash.com/photo-1484308129484-ff3063eea281?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1080&amp;h=1200&amp;q=80" alt=""><img class="img-fluid position-absolute" width="160" height="160" style="top:0; left:0; margin-left: -48px; margin-top: -48px;" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/elements/blob-tear.svg" alt=""><img class="img-fluid position-absolute" width="160" height="160" style="right:0; bottom:0; margin-right: -48px; margin-bottom: -48px;" src="metis-assets/elements/blob-tear.svg" alt=""></div>
            <div class="col-12 col-lg-6 py-5">
              <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                  <span class="badge rounded-pill bg-primary">Lorem ipsum</span>
                  <h2 class="mt-3 mb-5 fs-1 fw-bold">Key Features</h2>
                  <div class="d-flex mb-4 pb-1">
                    <span class="mr-4 text-primary">
                      <svg width="32" height="32" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                      </svg>
                    </span>
                    <div>
                      <h5>Easy to customize</h5>
                      <p class="mb-0 text-muted lh-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
                    </div>
                  </div>
                  <div class="d-flex mb-4 pb-1">
                    <span class="mr-4 text-primary">
                      <svg width="32" height="32" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                      </svg>
                    </span>
                    <div>
                      <h5>Flexible software</h5>
                      <p class="mb-0 text-muted lh-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
                    </div>
                  </div>
                  <div class="d-flex">
                    <span class="mr-4 text-primary">
                      <svg width="32" height="32" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                      </svg>
                    </span>
                    <div>
                      <h5>Best access for all of the resources</h5>
                      <p class="mb-0 text-muted lh-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex">
              <div class="my-auto">
                <h2 class="mb-4 fs-1 fw-bold">Sed ac magna sit amet risus tristique interdum, at vel velit in hac habitasse platea dictumst.</h2>
                <p class="mb-4 text-muted lh-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, quam nec venenatis lobortis, mi risus tempus nulla, sed porttitor est nibh at nulla. Praesent placerat enim ut ex tincidunt vehicula. Fusce sit amet dui tellus.</p>
                <a class="btn btn-primary" href="#">Learn More</a>
              </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0 pt-3 pt-lg-0">
              <ul class="px-lg-5 list-unstyled">
                <li class="d-flex mb-5">
                  <div class="pr-4">
                    <span class="d-flex align-items-center justify-content-center bg-light text-primary rounded-circle fs-3" style="width: 64px; height: 64px;">1</span>
                  </div>
                  <div>
                    <h4 class="fw-bold">Key Elements</h4>
                    <p class="text-muted lh-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                  </div>
                </li>
                <li class="d-flex mb-5">
                  <div class="pr-4">
                    <span class="d-flex align-items-center justify-content-center bg-light text-primary rounded-circle fs-3" style="width: 64px; height: 64px;">2</span>
                  </div>
                  <div>
                    <h4 class="fw-bold">Flexible Elements</h4>
                    <p class="text-muted lh-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                  </div>
                </li>
                <li class="d-flex">
                  <div class="pr-4">
                    <span class="d-flex align-items-center justify-content-center bg-light text-primary rounded-circle fs-3" style="width: 64px; height: 64px;">3</span>
                  </div>
                  <div>
                    <h4 class="fw-bold">Flexible Software</h4>
                    <p class="text-muted lh-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    
      <section class="py-5" style="background-image: url('wp-content/themes/fridayone/metis-assets/backgrounds/intersect.svg'); background-size: contain; background-repeat: no-repeat; background-position: top;">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 col-lg-6 mx-auto text-center">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/icons/quote.svg" alt="">
              <p class="fs-1 fw-bold">Lorem ipsum dolor sit amet consectutar domor</p>
              <p class="text-muted lh-lg mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="p-4 bg-white shadow-sm rounded">
                <div class="d-flex">
                  <img class="rounded-circle" style="height: 50px; width: 50px; object-fit: cover;" src="https://images.unsplash.com/photo-1556474835-b0f3ac40d4d1?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="">
                  <div class="ml-3">
                    <h5 class="mb-1">John Bailey</h5>
                    <p class="text-primary">CEO</p>
                  </div>
                </div>
                <p class="text-muted lh-lg">In et sagittis risus, sed molestie sapien. Suspendisse potenti. Sed pharetra, leo quis dignissim tristique, arcu arcu varius libero, ut vestibulum sapien odio facilisis nunc.</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="p-4 bg-white shadow-sm rounded">
                <div class="d-flex">
                  <img class="rounded-circle" style="height: 50px; width: 50px; object-fit: cover;" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="">
                  <div class="ml-3">
                    <h5 class="mb-1">Julie Brown</h5>
                    <p class="text-primary">Head of Development</p>
                  </div>
                </div>
                <p class="text-muted lh-lg">In et sagittis risus, sed molestie sapien. Suspendisse potenti. Sed pharetra, leo quis dignissim tristique, arcu arcu varius libero, ut vestibulum sapien odio facilisis nunc.</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="p-4 bg-white shadow-sm rounded">
                <div class="d-flex">
                  <img class="rounded-circle" style="height: 50px; width: 50px; object-fit: cover;" src="https://images.unsplash.com/photo-1584308972272-9e4e7685e80f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="">
                  <div class="ml-3">
                    <h5 class="mb-1">Julie Jones</h5>
                    <p class="text-primary">Head of Operations</p>
                  </div>
                </div>
                <p class="text-muted lh-lg">In et sagittis risus, sed molestie sapien. Suspendisse potenti. Sed pharetra, leo quis dignissim tristique, arcu arcu varius libero, ut vestibulum sapien odio facilisis nunc.</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="p-4 bg-white shadow-sm rounded">
                <div class="d-flex">
                  <img class="rounded-circle" style="height: 50px; width: 50px; object-fit: cover;" src="https://images.unsplash.com/photo-1584308972272-9e4e7685e80f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="">
                  <div class="ml-3">
                    <h5 class="mb-1">Julie Brown</h5>
                    <p class="text-primary">Head of Operations</p>
                  </div>
                </div>
                <p class="text-muted lh-lg">In et sagittis risus, sed molestie sapien. Suspendisse potenti. Sed pharetra, leo quis dignissim tristique, arcu arcu varius libero, ut vestibulum sapien odio facilisis nunc.</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="p-4 bg-white shadow-sm rounded">
                <div class="d-flex">
                  <img class="rounded-circle" style="height: 50px; width: 50px; object-fit: cover;" src="https://images.unsplash.com/photo-1556474835-b0f3ac40d4d1?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="">
                  <div class="ml-3">
                    <h5 class="mb-1">Tom Brown</h5>
                    <p class="text-primary">Head of Development</p>
                  </div>
                </div>
                <p class="text-muted lh-lg">In et sagittis risus, sed molestie sapien. Suspendisse potenti. Sed pharetra, leo quis dignissim tristique, arcu arcu varius libero, ut vestibulum sapien odio facilisis nunc.</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="p-4 bg-white shadow-sm rounded">
                <div class="d-flex">
                  <img class="rounded-circle" style="height: 50px; width: 50px; object-fit: cover;" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="">
                  <div class="ml-3">
                    <h5 class="mb-1">Julie Bailey</h5>
                    <p class="text-primary">Head of Development</p>
                  </div>
                </div>
                <p class="text-muted lh-lg">In et sagittis risus, sed molestie sapien. Suspendisse potenti. Sed pharetra, leo quis dignissim tristique, arcu arcu varius libero, ut vestibulum sapien odio facilisis nunc.</p>
              </div>
            </div>
          </div>
          <div class="text-center"><a class="btn btn-primary" href="#">Show more Testimonials</a></div>
        </div>
      </section>
<?php } else {?>
  <div class="row">
  <div class="col-sm-9">
    <?php  get_template_part('breadcrumb'); ?>
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

<h2 class="fs-1 fw-bold"><?php the_title(); ?></h2>  
       
                <?php the_excerpt(); ?>
         <a href="<?php the_permalink();?>">Read more...</a>
                    <?php echo '<hr/>'; ?> 
     
            <?php endwhile; ?>
            </div> 
<div class="col-sm-3">
            <?php get_sidebar('sidebar');?>
  </div>  </div>
        <?php endif;
}?>


<?php get_footer(); ?>