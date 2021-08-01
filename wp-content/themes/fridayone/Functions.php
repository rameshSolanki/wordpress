<?php
function my_content($content)
{
    global $post;
    return '<div id="text" class="lead">'.$content.'</div>';
}

add_filter('the_content', 'my_content');
// function fridayone_content_ad($content)
// {
//     $myadcode = '<p id="text" class="lead">';
//     $myadcode .= 'some string with the ad code';
//     $myadcode .= '</p>';

//     $filteredcontent = $myadcode . $content;

//     return $filteredcontent;
// }
// add_filter('the_content', 'fridayone_content_ad');
add_filter('wp_generate_tag_cloud_data', 'my_tag_cloud_data', 10, 1);

function my_tag_cloud_data($tags_data)
{

    foreach ($tags_data as $key => $tag) {
        // get tag count
        $count = $tag [ 'real_count' ];

        // adjust the class based on the size
        if ($count > 20) {
            $tags_data [ $key ] [ 'class' ] .= ' tag x-large';
        } elseif ($count > 15) {
            $tags_data [ $key ] [ 'class' ] .= ' tag large';
        } elseif ($count > 7) {
            $tags_data [ $key ] [ 'class' ] .= ' tag medium';
        } elseif ($count > 1) {
            $tags_data [ $key ] [ 'class' ] .= ' tag small';
        } else {
            $tags_data [ $key ] [ 'class' ] .= ' tag x-small ';
        }
    }

    // return adjusted data
    return $tags_data;
}
function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
function register_my_menus()
{
    register_nav_menus(array(
    'header-menu' => 'Header Menu'
    ));
}
add_action('init', 'register_my_menus');


function register_my_widgets()
{
    register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar-1',
    'description'   => 'Custom Sidebar Widget',
    'before_widget' => '<div class="sidebar-widget mt-2">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
    ));
    register_sidebar(array(
    'name' => 'Footer 1',
    'id' => 'footer-1',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
    ));
    register_sidebar(array(
    'name' => 'Footer 2',
    'id' => 'footer-2',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
    ));
    register_sidebar(array(
    'name' => 'Footer 3',
    'id' => 'footer-3',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'register_my_widgets');
