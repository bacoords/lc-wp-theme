<?php
/**
 * Declaring widgets
 *
 *
 * @package understrap
 */
function understrap_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'understrap' ),
		'id'            => 'sidebar-1',
		'description'   => 'Sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'Hero Slider', 'understrap' ),
        'id'            => 'hero',
        'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
        'before_widget' => '<div class="item">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Hero Static', 'understrap' ),
        'id'            => 'statichero',
        'description'   => 'Static Hero widget. no slider functionallity',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

        register_sidebar( array(
        'name'          => __( 'Footer Left', 'understrap' ),
        'id'            => 'footerleft',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '<div class="widget-footer widget-footerleft">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

        register_sidebar( array(
        'name'          => __( 'Footer Left Center', 'understrap' ),
        'id'            => 'footerleftcenter',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '<div class="widget-footer widget-footerleftcenter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

        register_sidebar( array(
        'name'          => __( 'Footer Right Center', 'understrap' ),
        'id'            => 'footerrightcenter',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '<div class="widget-footer widget-footerrightcenter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

        register_sidebar( array(
        'name'          => __( 'Footer Right', 'understrap' ),
        'id'            => 'footerright',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '<div class="widget-footer widget-footerright">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'understrap_widgets_init' );