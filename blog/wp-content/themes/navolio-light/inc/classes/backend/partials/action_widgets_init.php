<?php 
if ( ! defined( 'ABSPATH' ) ) die( esc_html__( 'Direct access forbidden.', 'navolio-light' ) );

register_sidebar(  array(
    'name'          => esc_html__( 'Sidebar Blog', 'navolio-light' ),
    'description'   => esc_html__( 'This sidebar will show in blog page', 'navolio-light' ),
    'id'            => 'sidebar-blog',
    'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s ">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

register_sidebar(  array(
    'name'          => esc_html__( 'Sidebar Single', 'navolio-light' ),
    'description'   => esc_html__( 'This sidebar will show in blog single page', 'navolio-light' ),
    'id'            => 'sidebar-single',
    'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s ">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

register_sidebar(  array(
    'name'          => esc_html__( 'Footer Widget One', 'navolio-light' ),
    'description'   => esc_html__( 'This sidebar will show in footer', 'navolio-light' ),
    'id'            => 'footer-one',
    'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s ">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

register_sidebar(  array(
    'name'          => esc_html__( 'Footer Widget Two', 'navolio-light' ),
    'description'   => esc_html__( 'This sidebar will show in footer', 'navolio-light' ),
    'id'            => 'footer-two',
    'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s ">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

register_sidebar(  array(
    'name'          => esc_html__( 'Footer Widget Three', 'navolio-light' ),
    'description'   => esc_html__( 'This sidebar will show in footer', 'navolio-light' ),
    'id'            => 'footer-three',
    'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s ">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );
 
register_sidebar(  array(
    'name'          => esc_html__( 'Footer Widget Four', 'navolio-light' ),
    'description'   => esc_html__( 'This sidebar will show in footer', 'navolio-light' ),
    'id'            => 'footer-four',
    'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s ">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );