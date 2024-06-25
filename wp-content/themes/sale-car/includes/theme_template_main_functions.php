<?php
class MainFunction{

    public static function init(){
        add_filter( 'show_admin_bar', '__return_false' );
    }
}
MainFunction::init();