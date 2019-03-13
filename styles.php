<?php
header("Content-type: text/css; charset: UTF-8");

/* Convert hexdec color string to rgb(a) string */

function hex2rgba($color, $opacity = false)
{

    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if (empty($color))
        return $default;

    //Sanitize $color if "#" is provided
    if ($color[0] == '#') {
        $color = substr($color, 1);
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
    } elseif (strlen($color) == 3) {
        $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
    } else {
        return $default;
    }

    //Convert hexadec to rgb
    $rgb = array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if ($opacity) {
        if (abs($opacity) > 1)
            $opacity = 1.0;
        $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
    } else {
        $output = 'rgb(' . implode(",", $rgb) . ')';
    }

    //Return rgb(a) color string
    return $output;
}


if (isset($_GET['color1']) AND $_GET['color1'] != '') {
    $color1 = $_GET['color1'];
} else {
    $color1 = '3d00b4';
}

if (isset($_GET['color2']) AND $_GET['color2'] != '') {
    $color2 = $_GET['color2'];
} else {
    $color2 = '4d009c';
}

if (isset($_GET['color3']) AND $_GET['color3'] != '') {
    $color3 = $_GET['color3'];
} else {
    $color3 = 'ff2051';
}

if (isset($_GET['color4']) AND $_GET['color4'] != '') {
    $color4 = $_GET['color4'];
} else {
    $color4 = 'ffffff';
}

if (isset($_GET['color5']) AND $_GET['color5'] != '') {
    $color5 = $_GET['color5'];
} else {
    $color5 = '161616';
}

$color1_rgb = hex2rgba($color1);
$color1_rgb = str_replace('rgb(', '', $color1_rgb);
$color1_rgb = str_replace(')', '', $color1_rgb);
$color1_rgba = $color1_rgb;

$color2_rgb = hex2rgba($color2);
$color2_rgb = str_replace('rgb(', '', $color2_rgb);
$color2_rgb = str_replace(')', '', $color2_rgb);
$color2_rgba = $color2_rgb;

$color3_rgb = hex2rgba($color3);
$color3_rgb = str_replace('rgb(', '', $color3_rgb);
$color3_rgb = str_replace(')', '', $color3_rgb);
$color3_rgba = $color3_rgb;


$color4_rgb = hex2rgba($color4);
$color4_rgb = str_replace('rgb(', '', $color4_rgb);
$color4_rgb = str_replace(')', '', $color4_rgb);
$color4_rgba = $color4_rgb;

$color5_rgb = hex2rgba($color5);
$color5_rgb = str_replace('rgb(', '', $color5_rgb);
$color5_rgb = str_replace(')', '', $color5_rgb);
$color5_rgba = $color5_rgb;

$color1 = '#' . $color1;
$color2 = '#' . $color2;
$color3 = '#' . $color3;
$color4 = '#' . $color4;
$color5 = '#' . $color5;
?>

<style>
    [data-overlay] .background-image-holder::after{background-image:linear-gradient(to right bottom, rgb(<?php print $color1_rgba; ?>), rgb(<?php print $color2_rgba; ?> ));}
    [data-overlay-inverse] .background-image-holder::after{background-image:linear-gradient(to right bottom, rgb(<?php print $color3_rgba; ?> ), rgb(<?php print $color3_rgba; ?> ));}
    [data-overlay-black] .background-image-holder::after{background-image:linear-gradient(to right bottom, rgb(0, 0, 0), rgb(0, 0, 0));}
    ul.socials li{color:rgb(<?php print $color1_rgba; ?>);}
    ul.socials li a{background-color:rgba(<?php print $color1_rgba; ?>, 0.03);color:rgb(<?php print $color1_rgba; ?>);}
    ul.socials li a:hover{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    ul.socials.labels li{color:rgb(<?php print $color1_rgba; ?>);}
    ul.socials.labels li a{background-color:rgba(<?php print $color1_rgba; ?>, 0.03);color:rgb(<?php print $color4_rgba; ?> );}
    ul.socials.labels li a:hover{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    ul.socials.labels li:hover a{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    .btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover, .open > .dropdown-toggle.btn-default.focus, .open > .dropdown-toggle.btn-default:focus, .open > .dropdown-toggle.btn-default:hover{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    .checkmark{background-color:rgb(238, 238, 238);}
    .styled-checkbox:hover input ~ .checkmark{background-color:rgb(204, 204, 204);}
    .styled-checkbox input:checked ~ .checkmark{background-color:rgb(<?php print $color1_rgba; ?>);}
    .styled-checkbox .checkmark::after{border-color:white;}
    #to-top{background-color:rgb(<?php print $color3_rgba; ?> );color:rgb(<?php print $color4_rgba; ?> );}
    #to-top::before{color:white;}
    .btn-primary{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color1_rgba; ?>);border-color:rgb(<?php print $color1_rgba; ?>);}
    .btn-primary:hover{background-color:rgb(<?php print $color3_rgba; ?> );color:rgb(<?php print $color4_rgba; ?> );border-color:rgb(<?php print $color3_rgba; ?> );}
    .btn-primary.focus, .btn-primary:focus{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color1_rgba; ?>);border-color:rgb(<?php print $color1_rgba; ?>);}
    .btn-default{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );border-color:rgb(<?php print $color1_rgba; ?>);}
    .btn-default:hover{background-color:rgb(<?php print $color3_rgba; ?> );color:rgb(<?php print $color4_rgba; ?> );border-color:rgb(<?php print $color3_rgba; ?> );}
    .btn-info{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color3_rgba; ?> );border-color:rgb(<?php print $color4_rgba; ?> );}
    .btn-info:hover{background-color:rgb(<?php print $color3_rgba; ?> );color:rgb(<?php print $color4_rgba; ?> );border-color:rgb(<?php print $color4_rgba; ?> );}
    .btn-danger{background-color:rgb(<?php print $color3_rgba; ?> );color:rgb(<?php print $color4_rgba; ?> );border-color:rgb(<?php print $color3_rgba; ?> );}
    .btn-danger:hover{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color3_rgba; ?> );border-color:rgb(<?php print $color3_rgba; ?> );}
    .mw-waves-btn .w-btn a i{background-color:rgb(<?php print $color3_rgba; ?> );color:rgb(<?php print $color4_rgba; ?> );}
    .mw-waves-btn .w-btn span{color:rgb(<?php print $color4_rgba; ?> );}
    .mw-waves-btn .waves-holder .waves{background-color:rgba(<?php print $color3_rgba; ?> , 0.2);}
    .section-2 h1::after, .section-2 h2::after, .section-6 h1::after, .section-6 h2::after, .section-7 h1::after, .section-7 h2::after, .section-13 h1::after, .section-13 h2::after, .section-16 h1::after, .section-16 h2::after{background-color:rgb(<?php print $color3_rgba; ?> );}
    .table th{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    .table td{color:rgb(<?php print $color5_rgba; ?> );}
    .table-striped > tbody > tr:nth-of-type(2n+1){background-color:rgba(<?php print $color1_rgba; ?>, 0.05);}
    .tabs .nav-tabs > li > a{color:rgb(<?php print $color5_rgba; ?> );}
    .tabs .nav-tabs > li.active > a, .tabs .nav-tabs > li.active > a:focus, .tabs .nav-tabs > li.active > a:hover{color:rgb(<?php print $color1_rgba; ?>);}
    .tabs .nav > li > a:focus, .tabs .nav > li > a:hover{background-color:transparent;color:rgb(<?php print $color1_rgba; ?>);}
    .tabs .as-buttons.nav-tabs > li > a{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color1_rgba; ?>);border-color:rgb(<?php print $color1_rgba; ?>);}
    .tabs .as-buttons.nav-tabs > li.active > a, .tabs .as-buttons.nav-tabs > li.active > a:focus, .tabs .as-buttons.nav-tabs > li.active > a:hover{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );border-color:rgb(<?php print $color1_rgba; ?>);}
    .tabs-2 .nav-tabs > li > a{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color5_rgba; ?> );}
    .tabs-2 .nav-tabs > li.active > a, .tabs-2 .nav-tabs > li.active > a:focus, .tabs-2 .nav-tabs > li.active > a:hover{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    .tabs-2 .nav > li > a:focus, .tabs-2 .nav > li > a:hover{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color1_rgba; ?>);}
    .tabs-2 .as-buttons.nav-tabs > li > a{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color1_rgba; ?>);border-color:rgb(<?php print $color1_rgba; ?>);}
    .tabs-2 .as-buttons.nav-tabs > li.active > a, .tabs-2 .as-buttons.nav-tabs > li.active > a:focus, .tabs-2 .as-buttons.nav-tabs > li.active > a:hover{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );border-color:rgb(<?php print $color1_rgba; ?>);}
    .field-holder label{color:rgb(<?php print $color1_rgba; ?>);}
    .field-holder .btn, .field-holder select:not(.selectpicker), .field-holder input{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color5_rgba; ?> );border-color:rgb(209, 209, 209);}
    .accordions .panel-heading{background-color:rgba(<?php print $color1_rgba; ?>, 0.03);}
    .accordions .panel-title > .small, .accordions .panel-title > .small > a, .panel-title > a, .accordions .panel-title > small, .accordions .panel-title > small > a{color:rgb(<?php print $color1_rgba; ?>);}
    .accordions .panel-title > a{color:rgb(<?php print $color1_rgba; ?>);}
    .accordions .panel-title > a::before{background-color:rgb(<?php print $color1_rgba; ?>);}
    .accordions .panel-title > a::after{color:rgb(<?php print $color4_rgba; ?> );}
    .accordions .panel-body, .accordions .panel-body p{color:rgb(<?php print $color5_rgba; ?> );}
    .leave-message-holder .form-control{color:rgb(<?php print $color5_rgba; ?> );border-color:rgb(206, 206, 206);}
    .leave-message-holder .captcha-holder > div{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color5_rgba; ?> );border-color:rgb(206, 206, 206);}
    .slick-testimonials .slide .info-holder{background-color:rgb(<?php print $color4_rgba; ?> );}
    .slick-testimonials .slide .info-holder h3{color:rgb(<?php print $color5_rgba; ?> );}
    .slick-testimonials .slide .info-holder h3::before{background-color:initial;}
    .slick-testimonials .slide .info-holder h4{color:rgb(96, 96, 96);}
    .slick-testimonials .slide .info-holder p{color:rgb(96, 96, 96);}
    .slick-testimonials .slick-dots li button{background-color:rgb(207, 207, 207);}
    .slick-testimonials .slick-dots li.slick-active button{background-color:rgb(<?php print $color1_rgba; ?>);}
    .slick-testimonials-2 .slide .info-holder h3{color:rgb(<?php print $color4_rgba; ?> );}
    .slick-testimonials-2 .slide .info-holder h4{color:rgb(<?php print $color4_rgba; ?> );}
    .slick-testimonials-2 .slide .info-holder p{color:rgb(<?php print $color4_rgba; ?> );}
    .slick-testimonials-2 .slick-dots li button{background-color:transparent;border-color:rgb(<?php print $color4_rgba; ?> );}
    .slick-testimonials-2 .slick-dots li.slick-active button{background-color:rgb(<?php print $color4_rgba; ?> );border-color:rgb(<?php print $color4_rgba; ?> );}
    .slick-testimonials-2 .slick-arrow{background-color:initial;}
    .slick-testimonials-2 .slick-arrow::before{color:rgb(<?php print $color4_rgba; ?> );}
    .styled-lists li{color:rgb(<?php print $color5_rgba; ?> );}
    .styled-lists li::before{color:rgb(<?php print $color1_rgba; ?>);}
    .blog-posts .description h3{color:rgb(<?php print $color5_rgba; ?> );}
    .blog-posts .description{border-color:rgb(249, 249, 249);}
    .blog-posts .description, .blog-posts .description p{color:rgb(<?php print $color5_rgba; ?> );}
    .blog-posts .post .image .hover{background-color:rgba(<?php print $color3_rgba; ?> , 0.15);}
    .teamcard .description h3{color:rgb(<?php print $color5_rgba; ?> );}
    .teamcard .description, .teamcard .description p{color:rgb(<?php print $color5_rgba; ?> );}
    .teamcard-2 .description h3{color:rgb(<?php print $color1_rgba; ?>);}
    .teamcard-2 .description{background-color:rgb(245, 245, 245);}
    .teamcard-2 .description, .teamcard-2 .description p{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-products .product h3{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-products .product .image{background-color:rgb(240, 240, 240);}
    .shop-products .product .image .hover{background-color:rgba(<?php print $color3_rgba; ?> , 0.15);}
    .shop-products .product .price{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-products .product .price .strikethrough{color:rgb(209, 208, 196);}
    .shop-products .product-label{background-color:rgb(<?php print $color3_rgba; ?> );color:rgb(<?php print $color4_rgba; ?> );}
    .shop-products .product-label.promo{background-color:rgb(<?php print $color1_rgba; ?>);}
    .pricing-list .plan .label.bestseller{background-color:rgb(<?php print $color3_rgba; ?> );color:rgb(<?php print $color4_rgba; ?> );}
    .pricing-list .plan .heading{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    .pricing-list .plan:hover .description{background-color:rgb(244, 240, 251);}
    .pricing-list .plan .description p.strikethrough{color:rgb(134, 134, 134);}
    .navigation-holder, .navigation{background-color:rgb(<?php print $color1_rgba; ?>);}
    .navigation .navbar-header .toggle a{color:rgb(<?php print $color4_rgba; ?> );}
    .mobile-menu-btn span{background-color:white;}
    .navigation .navbar-header .cart a{color:rgb(<?php print $color4_rgba; ?> );}
    .navigation .menu .list > li > a{color:rgb(<?php print $color4_rgba; ?> );}
    .navigation .menu .list > .open > a:hover::after, .navigation .menu .list > .open > a:focus::after, .navigation .menu .list > .open > a:hover::after, .navigation .menu .list > li > a:hover::after{background-color:rgba(<?php print $color4_rgba; ?> , 0.2);}
    .navigation .menu .list > .active > a, .navigation .menu .navbar-nav > .active > a:focus, .navigation .menu .navbar-nav > .active > a:hover{background-color:transparent;color:rgb(<?php print $color4_rgba; ?> );}
    .navigation .menu .list > .active > a::after, .navigation .menu .list > .active > a:focus::after, .navigation .menu .list > .active > a:hover::after{background-color:rgba(<?php print $color4_rgba; ?> , 0.2);}
    .mobile-search button{background-color:rgb(<?php print $color3_rgba; ?>);color:white;}
    .mobile-search input{background-color:transparent;color:white;}
    .mobile-search .fa{color:white;}
    .member-nav .dropdown-toggle > span{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(26, 0, 71);}
    .member-nav-inverse .member-nav .dropdown-toggle > span{background-color:rgb(<?php print $color4_rgba; ?> );color:rgba(<?php print $color4_rgba; ?> , 0.6);}
    .member-nav .dropdown-toggle > i{color:rgba(<?php print $color4_rgba; ?> , 0.8);}
    .member-nav .search button{background-color:transparent;color:rgba(<?php print $color4_rgba; ?> , 0.8);}
    .member-nav .search input{background-color:rgb(<?php print $color4_rgba; ?> );color:rgba(<?php print $color4_rgba; ?> , 0.6);}
    .member-nav-inverse .member-nav .search input, .member-nav-inverse .member-nav .dropdown-toggle > span{background-color:rgb(26, 0, 71);}
    .member-nav-inverse .member-nav .caret{color:rgb(<?php print $color4_rgba; ?> );}
    .member-nav .shopping-cart-holder .product .remove{color:rgb(<?php print $color3_rgba; ?> );}
    .member-nav .shopping-cart-holder .product h5{color:rgb(<?php print $color4_rgba; ?> );}
    .member-nav .shopping-cart-holder .product .qty{color:rgba(<?php print $color4_rgba; ?> , 0.5);}
    .member-nav .shopping-cart-holder .product .price{color:rgb(<?php print $color4_rgba; ?> );}
    .member-nav .shopping-cart-holder .total p{color:rgb(<?php print $color4_rgba; ?> );}
    footer{background-color:rgb(47, 48, 60);}
    footer ul li{color:rgb(96, 96, 96);}
    footer a{color:rgb(130, 131, 138);}
    footer a:hover{color:rgb(<?php print $color4_rgba; ?> );}
    footer ul li a{color:rgb(130, 131, 138);}
    footer ul li a:hover{color:rgb(<?php print $color4_rgba; ?> );}
    footer ul.socials li{color:rgb(<?php print $color1_rgba; ?>);}
    footer ul.socials li a{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color1_rgba; ?>);}
    footer ul.socials li a:hover{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    footer p{color:rgb(96, 96, 96);}
    footer .copyright p{color:rgb(130, 131, 138);}
    footer .title{color:rgb(<?php print $color4_rgba; ?> );}
    footer .small-title{color:rgb(<?php print $color4_rgba; ?> );}
    footer .newsletter-holder{color:rgb(<?php print $color4_rgba; ?> );}
    .newsletter-holder{background-color:rgb(41, 40, 50);}
    .newsletter-holder input{background-color:transparent;}
    .newsletter-holder button{background-color:rgb(<?php print $color1_rgba; ?>);color:rgb(<?php print $color4_rgba; ?> );}
    .newsletter-holder button:hover{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(<?php print $color1_rgba; ?>);}
    .section-silver{background-color:rgb(246, 246, 246);}
    .section-1{background-color:initial;background-image:linear-gradient(rgb(<?php print $color1_rgba; ?>) 0%, rgb(<?php print $color2_rgba; ?> ) 100%);}
    .section-1 h1{color:rgb(<?php print $color4_rgba; ?> );}
    .section-1 p, .section-1 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-2 h1, .section-2 h2, .section-2 h3, .section-2 h4, .section-2 h5, .section-2 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-2 h1, .titles-inverse .section-2 h2, .titles-inverse .section-2 h3, .titles-inverse .section-2 h4, .titles-inverse .section-2 h5, .titles-inverse .section-2 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-2 p, .section-2 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-3 h1, .section-3 h2, .section-3 h3, .section-3 h4, .section-3 h5, .section-3 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-3 p, .section-3 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-3 .feature{background-color:rgba(<?php print $color2_rgba; ?> , 0.05);}
    .section-3 .feature .icon{background-color:rgb(<?php print $color4_rgba; ?> );}
    .section-3 .feature .icon i{color:rgb(<?php print $color1_rgba; ?>);}
    .section-3 .feature:hover .icon{background-color:rgb(<?php print $color3_rgba; ?> );}
    .section-3 .feature:hover .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-4 h1, .section-4 h2, .section-4 h3, .section-4 h4, .section-4 h5, .section-4 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-4 h1, .titles-inverse .section-4 h2, .titles-inverse .section-4 h3, .titles-inverse .section-4 h4, .titles-inverse .section-4 h5, .titles-inverse .section-4 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-4 p, .section-4 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-5 h1, .section-5 h2, .section-5 h3, .section-5 h4, .section-5 h5, .section-5 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-5 h1, .titles-inverse .section-5 h2, .titles-inverse .section-5 h3, .titles-inverse .section-5 h4, .titles-inverse .section-5 h5, .titles-inverse .section-5 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-5 p, .section-5 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-6{background-color:initial;background-image:linear-gradient(rgb(<?php print $color1_rgba; ?>) 0%, rgb(<?php print $color2_rgba; ?> ) 100%);}
    .section-6 h1, .section-6 h2, .section-6 h3, .section-6 h4, .section-6 h5, .section-6 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-6 p, .section-6 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-7 h1, .section-7 h2, .section-7 h3, .section-7 h4, .section-7 h5, .section-7 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-7 p, .section-7 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-7 .feature{background-color:rgb(246, 246, 246);}
    .section-7 .feature .icon{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-7 .feature .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-7 .feature:hover .icon{background-color:rgb(<?php print $color3_rgba; ?> );}
    .section-7 .feature:hover .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-8{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-8 h1, .section-8 h2, .section-8 h3, .section-8 h4, .section-8 h5, .section-8 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-8 p, .section-8 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-8 .feature .icon, .section-8 .feature .label{color:rgb(<?php print $color4_rgba; ?> );}
    .section-9 h1, .section-9 h2, .section-9 h4, .section-9 h5, .section-9 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-9 h1, .titles-inverse .section-9 h2, .titles-inverse .section-9 h4, .titles-inverse .section-9 h5, .titles-inverse .section-9 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-9 h3{color:rgb(<?php print $color5_rgba; ?> );}
    .section-9 p, .section-9 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-10 h3{color:rgb(<?php print $color5_rgba; ?> );}
    .section-10 p, .section-10 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-11 h1, .section-11 h2, .section-11 h3, .section-11 h4, .section-11 h5, .section-11 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-11 p, .section-11 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-11 .btn{border-color:rgb(<?php print $color4_rgba; ?> );}
    .section-12 h3{color:rgb(<?php print $color5_rgba; ?> );}
    .section-12 p, .section-12 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-12 .feature .icon{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-12 .feature .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-12 .feature:hover .icon{background-color:rgb(<?php print $color3_rgba; ?> );}
    .section-12 .feature:hover .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-13{background-color:rgb(246, 246, 246);}
    .section-13 h1, .section-13 h2, .section-13 h3, .section-13 h4, .section-13 h5, .section-13 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-13 h1, .titles-inverse .section-13 h2, .titles-inverse .section-13 h3, .titles-inverse .section-13 h4, .titles-inverse .section-13 h5, .titles-inverse .section-13 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-13 p, .section-13 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-14{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-14 h1, .section-14 h2, .section-14 h3, .section-14 h4, .section-14 h5, .section-14 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-14 p, .section-14 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-15 h1, .section-15 h2, .section-15 h3, .section-15 h4, .section-15 h5, .section-15 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-15 h1, .titles-inverse .section-15 h2, .titles-inverse .section-15 h3, .titles-inverse .section-15 h4, .titles-inverse .section-15 h5, .titles-inverse .section-15 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-15 p, .section-15 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-16 h1, .section-16 h2, .section-16 h3, .section-16 h4, .section-16 h5, .section-16 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-16 h1, .titles-inverse .section-16 h2, .titles-inverse .section-16 h3, .titles-inverse .section-16 h4, .titles-inverse .section-16 h5, .titles-inverse .section-16 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-16 p, .section-16 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-16 .box-info .title span, .section-16 .box-info .title i, .section-16 .box-info .title{color:rgb(<?php print $color1_rgba; ?>);}
    .section-17 h1, .section-17 h2, .section-17 h3, .section-17 h4, .section-17 h5, .section-17 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-17 p, .section-17 span{color:rgb(<?php print $color4_rgba; ?> );}
    .home-slider .slick-arrow{background-color:initial;}
    .home-slider .slick-arrow::before{color:rgb(<?php print $color4_rgba; ?> );}
    .home-slider .slick-dots li button{background-color:rgb(207, 207, 207);}
    .home-slider .slick-dots li.slick-active button{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-18 h1, .section-18 h2, .section-18 h3, .section-18 h4, .section-18 h5, .section-18 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-18 p, .section-18 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-18 .feature .icon{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-18 .feature .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-18 .feature:hover .icon{background-color:rgb(<?php print $color3_rgba; ?> );}
    .section-18 .feature:hover .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-19{background-color:rgba(<?php print $color1_rgba; ?>, 0.05);}
    .section-19 h1, .section-19 h2, .section-19 h3, .section-19 h4, .section-19 h5, .section-19 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-19 h1, .titles-inverse .section-19 h2, .titles-inverse .section-19 h3, .titles-inverse .section-19 h4, .titles-inverse .section-19 h5, .titles-inverse .section-19 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-19 p, .section-19 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-19 .prices .price-holder .model{color:rgb(<?php print $color5_rgba; ?> );}
    .section-19 .prices .price-holder .price{color:rgb(168, 168, 168);}
    .section-20 h1, .section-20 h2, .section-20 h3, .section-20 h4, .section-20 h5, .section-20 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-20 p, .section-20 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-20 .img-holder{background-color:initial;}
    .section-20 .img-holder .decoration{background-color:rgba(<?php print $color1_rgba; ?>, 0.83);}
    .section-20 .img-holder .img::after{background-color:rgb(0, 0, 0);}
    .section-20 .features .count{color:rgb(<?php print $color1_rgba; ?>);}
    .section-20 .features .title{color:rgb(<?php print $color5_rgba; ?> );}
    .section-21 h1, .section-21 h2, .section-21 h3, .section-21 h4, .section-21 h5, .section-21 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-21 p, .section-21 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-21 .leave-message-holder{background-color:rgb(<?php print $color4_rgba; ?> );}
    .section-21 .leave-message-holder h4, .section-21 .leave-message-holder p{color:rgb(<?php print $color5_rgba; ?> );}
    .section-22{background-color:rgb(245, 245, 245);}
    .section-22 h3{color:rgb(<?php print $color5_rgba; ?> );}
    .section-22 p, .section-22 span{color:rgb(96, 96, 96);}
    .section-22 .feature{background-color:rgb(245, 245, 245);}
    .section-22 .feature:hover{background-color:rgb(<?php print $color4_rgba; ?> );}
    .section-22 .feature .icon i{color:rgb(<?php print $color1_rgba; ?>);}
    .section-22 .feature:hover .icon i{color:rgb(<?php print $color3_rgba; ?> );}
    .section-22 .feature .label-read-more{color:rgb(<?php print $color3_rgba; ?> );}
    .section-22 .gradient-colors{background-color:rgb(<?php print $color3_rgba; ?> );}
    .section-22 .gradient-colors, .section-22 .gradient-colors p{color:rgb(<?php print $color4_rgba; ?> );}
    .section-23 h1, .section-23 h2, .section-23 h3, .section-23 h4, .section-23 h5, .section-23 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-23 .title span{color:rgb(96, 96, 96);}
    .section-23 p, .section-23 span{color:rgb(96, 96, 96);}
    .section-23 .feature .icon{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-23 .feature .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-23 .feature:hover .icon{background-color:rgb(<?php print $color3_rgba; ?> );}
    .section-23 .feature:hover .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-24{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-24 h1, .section-24 h2, .section-24 h3, .section-24 h4, .section-24 h5, .section-24 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-24 p, .section-24 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-25{background-color:rgb(245, 245, 245);}
    .section-25 h1, .section-25 h2, .section-25 h4, .section-25 h5, .section-25 h6{color:rgb(<?php print $color1_rgba; ?>);}
    .titles-inverse .section-25 h1, .titles-inverse .section-25 h2, .titles-inverse .section-25 h4, .titles-inverse .section-25 h5, .titles-inverse .section-25 h6{color:rgb(<?php print $color5_rgba; ?> );}
    .section-25 h3{color:rgb(<?php print $color5_rgba; ?> );}
    .section-25 p, .section-25 span{color:rgb(<?php print $color5_rgba; ?> );}
    .section-26 h1, .section-26 h2, .section-26 h3, .section-26 h4, .section-26 h5, .section-26 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-26 p, .section-26 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-27{background-color:rgb(245, 245, 245);}
    .section-27 h3{color:rgb(<?php print $color5_rgba; ?> );}
    .section-27 h4{color:rgb(<?php print $color5_rgba; ?> );}
    .section-27 h5{color:rgb(<?php print $color4_rgba; ?> );}
    .section-27 p, .section-27 span{color:rgb(<?php print $color4_rgba; ?> );}
    .section-27 .feature{background-color:rgb(<?php print $color1_rgba; ?>);}
    .section-27 .feature .icon i{color:rgb(<?php print $color4_rgba; ?> );}
    .section-28 h4{color:rgb(<?php print $color5_rgba; ?> );}
    .section-28 h5{color:rgb(<?php print $color5_rgba; ?> );}
    .section-29{background-color:rgb(47, 48, 60);}
    .section-29 h1, .section-29 h2, .section-29 h3, .section-29 h4, .section-29 h5, .section-29 h6{color:rgb(<?php print $color4_rgba; ?> );}
    .section-29 p, .section-29 span{color:rgb(<?php print $color4_rgba; ?> );}
    .blog-inner-page .heading h1{color:rgb(<?php print $color5_rgba; ?> );}
    .blog-inner-page .description p{color:rgb(<?php print $color5_rgba; ?> );}
    .blog-inner-page .share-label{color:rgb(<?php print $color5_rgba; ?> );}
    .blog-inner-page .comments .comment-holder .author, .blog-inner-page .comments .comment-holder .author a, .blog-inner-page .comments .comment-holder .author span{color:rgb(<?php print $color1_rgba; ?>);}
    .blog-inner-page .comments .comment-holder .date, .blog-inner-page .comments .comment-holder .date span{color:rgb(159, 159, 159);}
    .blog-inner-page .comments .comment-holder .description, .blog-inner-page .comments .comment-holder .description p{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-inner-page .heading h1{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-inner-page .description p{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-inner-page .share-label{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-inner-page .price-label{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-inner-page .comments .comment-holder .author, .shop-inner-page .comments .comment-holder .author a, .shop-inner-page .comments .comment-holder .author span{color:rgb(<?php print $color1_rgba; ?>);}
    .shop-inner-page .comments .comment-holder .date, .shop-inner-page .comments .comment-holder .date span{color:rgb(159, 159, 159);}
    .shop-inner-page .comments .comment-holder .description, .shop-inner-page .comments .comment-holder .description p{color:rgb(<?php print $color5_rgba; ?> );}
    .shop-inner-page .elevatezoom .elevatezoom-holder{background-color:rgb(240, 240, 240);}
    .shop-inner-page .elevatezoom #elevatezoom-gallery a{background-color:rgb(240, 240, 240);}
    .shop-inner-page .elevatezoom #elevatezoom-gallery .slick-arrow{background-color:initial;}
    .shop-inner-page .elevatezoom #elevatezoom-gallery .slick-arrow::before{color:rgb(<?php print $color5_rgba; ?> );}
    .masonry-gallery .image-holder::after{border-color:rgb(<?php print $color4_rgba; ?> );}
    .masonry-gallery .image-holder_dark::after{border-color:rgb(43, 43, 43);}
    .masonry-gallery .image-holder__descr{background-color:rgb(<?php print $color3_rgba; ?> );}
    .projects .masonry-gallery .image-holder__descr{background-color:rgba(<?php print $color4_rgba; ?> , 0.71);}
    .projects .masonry-gallery .image-holder__descr .image-holder__heading{color:rgb(<?php print $color1_rgba; ?>);}
    .projects .masonry-gallery .image-holder__descr .image-holder__description{color:rgb(<?php print $color5_rgba; ?> );}
    .masonry-gallery .image-holder__heading{color:rgb(<?php print $color4_rgba; ?> );}
    .masonry-gallery .image-holder__icon{background-color:rgb(<?php print $color1_rgba; ?>);}
    .masonry-gallery .image-holder__icon::before{color:rgb(<?php print $color4_rgba; ?> );}
    .masonry-gallery .list-masonry-grid-works-filter__link-lines::before, .masonry-gallery .list-masonry-grid-works-filter__link-lines::after{background-color:rgb(<?php print $color1_rgba; ?>);}
    .checkout-modal .modal-content{background-color:rgb(245, 245, 245);color:rgb(80, 80, 80);border-color:rgb(195, 195, 195);}
    .checkout-modal .modal-header{border-color:rgb(195, 195, 195);}
    .checkout-modal .modal-header .close{background-color:rgb(245, 245, 245);color:rgb(80, 80, 80);border-color:rgb(195, 195, 195);}
    .checkout-modal .step-button i{color:rgb(80, 80, 80);}
    .checkout-modal .step-button span{color:rgb(80, 80, 80);}
    .checkout-modal .js-shopping-cart .products .product:hover{background-color:rgb(<?php print $color4_rgba; ?> );}
    .checkout-modal .js-shopping-cart .products .product .action a{color:rgb(<?php print $color3_rgba; ?> );}
    .login-modal .modal-content{background-color:rgb(245, 245, 245);color:rgb(80, 80, 80);border-color:rgb(195, 195, 195);}
    .login-modal .modal-header .close{background-color:rgb(245, 245, 245);color:rgb(80, 80, 80);border-color:rgb(195, 195, 195);}
    .login-modal .modal-body .form-control{background-color:rgb(<?php print $color4_rgba; ?> );color:rgb(80, 80, 80);border-color:rgb(195, 195, 195);}
    .login-modal .modal-body p{color:rgb(51, 51, 51);}
    .login-modal .modal-body .icon i{color:rgb(51, 51, 51);}
    .login-modal .socials-login a{color:rgb(<?php print $color4_rgba; ?> );}
    .login-modal .socials-login .facebook{background-color:rgb(59, 89, 152);}
    .login-modal .socials-login .twitter{background-color:rgb(0, 172, 237);}
    .login-modal .socials-login .gplus{background-color:rgb(219, 68, 55);}
    .login-modal .socials-login .linkedin{background-color:rgb(0, 119, 181);}
    .login-modal .socials-login .github{background-color:rgb(51, 51, 51);}
    .login-modal .socials-login .microweber{background-color:rgb(0, 134, 219);}
    .login-modal a{color:rgb(80, 80, 80);}
    .login-modal .act a{color:rgb(80, 80, 80);}
    .login-modal .personal-data{color:rgb(187, 187, 187);}
    .portfolio-inner-page .heading h1{color:rgb(<?php print $color1_rgba; ?>);}
    .portfolio-inner-page .description p{color:rgb(<?php print $color5_rgba; ?> );}
    .portfolio-inner-page .description .table td{color:rgb(<?php print $color5_rgba; ?> );}
    .project-gallery .slick-arrow{background-color:initial;}
    .portfolio-inner-page .project-gallery .slick-arrow::before{color:rgb(<?php print $color4_rgba; ?> );}
    .portfolio-projects .project h3{color:rgb(<?php print $color5_rgba; ?> );}
    .portfolio-projects .project .image{background-color:rgb(240, 240, 240);}
    .portfolio-projects .project .image .hover{background-color:rgba(<?php print $color3_rgba; ?> , 0.15);}
    .section-30{background-color:initial;background-image:linear-gradient(rgb(<?php print $color1_rgba; ?>) 0%, rgb(<?php print $color2_rgba; ?> ) 100%);}
    .section-30 h1,  .section-30 h2{color:rgb(<?php print $color4_rgba; ?> );}
    .section-30 p, .section-30 span{color:rgb(<?php print $color4_rgba; ?> );}
</style>