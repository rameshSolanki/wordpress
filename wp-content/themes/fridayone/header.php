<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo get_bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
   <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/minty/bootstrap.min.css"> -->
</head>

<body <?php body_class(); ?>>
    <div class="">
    
      <section style="background-image: url('metis-assets/backgrounds/intersect.svg'); background-size: contain; background-repeat: no-repeat; background-position: top;">
        <div class="container">
          <nav class="position-relative navbar navbar-expand-lg navbar-light py-3 mb-5">
            <a class="navbar-brand" href="<?php echo get_bloginfo('wpurl'); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/metis-assets/logos/metis/metis.svg" alt="" width="106" title="<?php echo get_bloginfo('name'); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="side-menu" data-target="#sideMenuHeaders01" aria-controls="sideMenuHeaders01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse">
<?php if (has_nav_menu('header-menu')) {
              wp_nav_menu(array(
              'theme_location' => 'header-menu',
                'menu_class'    => 'navbar-nav position-absolute top-50 left-50 translate-middle',
    'list_item_class'  => 'nav-item',
    'link_class'   => 'nav-link m-2 menu-item nav-active'

              ));
} ?>
           <!--    <ul class="navbar-nav position-absolute top-50 left-50 translate-middle">

                <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
              </ul> -->
              <div class="ml-auto"><a class="btn btn-outline-primary mr-2" href="#">Log In</a><a class="btn btn-primary" href="#">Sign Up</a></div>
            </div>
          </nav>
