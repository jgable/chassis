<?php

/**
 * return 'active' if on current page
 *
 */
function set_active($path, $active = 'active')
{
    return Request::is($path) ? $active : '';
}

/**
 * return true if production
 *
 */
function is_production() 
{
    return App::environment('production');
}

/**
 * return '.min' if not development
 *
 */
function set_min()
{
    if(is_production()) return '.min';
}

function get_gravatar($email)
{
    $hash = md5(strtolower(trim($email)));
    return "//www.gravatar.com/avatar/$hash";
}
