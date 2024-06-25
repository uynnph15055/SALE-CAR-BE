<?php

function sidebar_create_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', TEXT_DOMAIN ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Choose what should display on blog pages.', TEXT_DOMAIN ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => 'Company info footer',
        'id'            => 'company-info-footer',
        'description'   => 'Show info company in footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="info-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'sidebar_create_init' );