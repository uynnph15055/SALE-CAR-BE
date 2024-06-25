<?php
/**
 * router.php handler
 */

// current route array
$route = DynamicRouter::getCurrentRoute();

// handle custom routes
switch ($route['arguments']['post_name']) {

    case 'something':

        // do your stuff here for url: example.com/something
        // get other custom php template or do functions
        var_dump('something');
        break;

    case 'some-other-thing':

        // do your stuff here for url: example.com/some-other-thing
        // get other custom php template or do functions
        var_dump('some-other-thing');
        break;

    case 'child-thing':

        // do your stuff here for url: example.com/parent-thing/child-thing
        // get other custom php template or do functions
        var_dump('parent-thing/child-thing');
        break;

    default:

        return false;

}