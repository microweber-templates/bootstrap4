<?php


$sticky_navigation = get_option('sticky_navigation', 'mw-template-qtheme');
if ($sticky_navigation == false OR $sticky_navigation == '') {
    $sticky_navigation = '';
}

$member_navigation_style = get_option('member_navigation_style', 'mw-template-qtheme');
if ($member_navigation_style == false OR $member_navigation_style == '') {
    $member_navigation_style = '';
}

$titles_inverse = get_option('titles_inverse', 'mw-template-qtheme');
if ($titles_inverse == false OR $titles_inverse == '') {
    $titles_inverse = '';
}

$buttons_style = get_option('buttons_style', 'mw-template-qtheme');
if ($buttons_style == false OR $buttons_style == '') {
    $buttons_style = '';
}

$shopping_cart = get_option('shopping_cart', 'mw-template-qtheme');
if ($shopping_cart == false OR $shopping_cart == '' OR $shopping_cart == 'false') {
    $shopping_cart = 'false';
} else {
    $shopping_cart = 'true';
}

$profile_link = get_option('profile_link', 'mw-template-qtheme');
if ($profile_link == false OR $profile_link == '' OR $profile_link == 'false') {
    $profile_link = 'false';
} else {
    $profile_link = 'true';
}

$footer = get_option('footer', 'mw-template-qtheme');
if ($footer == false OR $footer == '') {
    $footer = 'false';
}

$color_scheme = get_option('color-scheme', 'mw-template-qtheme');
if ($color_scheme == '') {
    $color_scheme = '';
}
