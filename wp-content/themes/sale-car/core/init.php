<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
class Init{
    public function __construct(){
        add_action( 'login_enqueue_scripts', array($this, 'login_logo_custom' ));
        $this->setup();
    }
    private function setup(){
        add_action( 'after_setup_theme', array($this,'setup_theme' ));
    }

    public function setup_theme(){
        load_theme_textdomain( TEXT_DOMAIN, TEMP_DIR . '/languages' );
        // theme supports
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
                'navigation-widgets',
            )
        );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        //Woocommerce
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        // nav menus
        register_nav_menus( array(
            'primary'       => __( 'Primary Menu', TEXT_DOMAIN ),
        ) );
    }

    public function login_logo_custom() {
        ?>
        <style>
            body.login div#login h1 a {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_login.svg);
                background-size: 224px 82px;
                background-position: center top;
                background-repeat: no-repeat;
                color: rgb(153, 153, 153);
                height: 100px;
                font-size: 20px;
                font-weight: 400;
                line-height: 1.3em;
                margin: 0 auto 25px;
                padding: 0;
                text-decoration: none;
                width: 260px;
                text-indent: -9999px;
                outline: 0 none;
                overflow: hidden;
                display: block;
            }
        </style>
        <?php
    }
}
new Init;

