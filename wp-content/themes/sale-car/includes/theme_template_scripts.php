<?php
if (!function_exists('template_scripts')) {
    function template_scripts()
    {
        // CSS
        wp_enqueue_style('owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
        wp_enqueue_style('owltheme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
        wp_enqueue_style('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancyapps-ui/5.0.20/fancybox/fancybox.min.css');
//        wp_enqueue_style('animate-css', DIR_URI . '/node_modules/wow.js/css/libs/animate.css', array(), '4.1.1');
        wp_enqueue_style('icon-font', 'https://pro.fontawesome.com/releases/v5.15.0/css/all.css', false, '5.15', 'all');

        // JS
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js', array('jquery'), '5.2.0', true);
        wp_enqueue_script('owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true);
        wp_enqueue_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancyapps-ui/5.0.20/fancybox/fancybox.umd.js', array('jquery'), '5.0.0', true);

        #- Start - Always at the bottom -#
        wp_enqueue_script('main-js', DIR_URI . '/assets/js/main.js', array(), THEME_VER, true);
        #- End - Always at the bottom -#

        // Script variables
        wp_localize_script('main-js', 'global_variables',
            array(
                'ajaxurl' => admin_url('admin-ajax.php'),
                'is_home' => is_front_page(),
                'home_url' => home_url(),
                'home_section' => @$_REQUEST['home-section'],
            )
        );
    }
}

add_action('wp_enqueue_scripts', 'template_scripts');