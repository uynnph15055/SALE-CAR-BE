<?php
require_once(TEMP_DIR . '/classes/DynamicRouter.lib.php');
// register custom url routes
function register_routes () {

    // make sure our DynamicRouter class exists
    if(!class_exists('DynamicRouter')) return false;

    // create page url /something
    DynamicRouter::create(
        '^something$',
        'router.php',
        'Something | ',
        [
            'post_name' => 'something'
        ]
    );

    // create page url /some-other-thing
    DynamicRouter::create(
        '^some-other-thing$',
        'router.php',
        'Some Other Thing | ',
        [
            'post_name' => 'some-other-thing'
        ]
    );

    // create page url /parent-thing/child-thing
    DynamicRouter::create(
        '^parent-thing/child-thing$',
        'router.php',
        'Child Thing | ',
        [
            'post_name' => 'child-thing'
        ]
    );

    // handle our page routes
    DynamicRouter::handle();

}
//register_routes();