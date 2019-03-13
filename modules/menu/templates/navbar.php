<?php

/*

type: layout

name: Navbar

description: Navigation bar

*/

?>
<script>

    /*    $(document).ready(function () {
     $('ul.nav .dropdown').hover(function () {
     $(this).find('.dropdown-menu:first', this).stop(true, true).delay(200).fadeIn();
     }, function () {
     $(this).find('.dropdown-menu:first', this).stop(true, true).delay(200).fadeOut();
     });
     });*/

</script>

<?php
$menu_filter['ul_class'] = 'list';
$menu_filter['ul_class_deep'] = 'dropdown-menu';
$menu_filter['li_class'] = '';
$menu_filter['a_class'] = '';

$menu_filter['li_submenu_class'] = 'dropdown';
$menu_filter['li_submenu_a_class'] = 'dropdown-toggle';

$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="menu_element_link {active_class} {exteded_classes} {nest_level} {a_class}"  href="{url}"><span>{title}</span></a>';
$menu_filter['li_submenu_a_link'] = '<a itemprop="url" data-item-id="{id}" href="{url}" class="menu_element_link {active_class} {exteded_classes} {nest_level} {li_submenu_a_class}" aria-haspopup="true" aria-expanded="false">{title} <span class="caret"></span></a>';

$mt = menu_tree($menu_filter);

if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>


<!--<ul class="list pull-left">-->
<!--    <li class="active"><a href="index.php">Home</a></li>-->
<!--    <li class="dropdown">-->
<!--        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>-->
<!--        <ul class="dropdown-menu">-->
<!--            <li><a href="blog-1.php">Blog - Four columns</a></li>-->
<!--            <li><a href="blog-2.php">Blog - Three columns</a></li>-->
<!--        </ul>-->
<!--    </li>-->
<!--    <li class="dropdown">-->
<!--        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>-->
<!--        <ul class="dropdown-menu">-->
<!--            <li><a href="#">Action</a></li>-->
<!--            <li><a href="#">Another action</a></li>-->
<!--            <li><a href="#">Something else here</a></li>-->
<!--        </ul>-->
<!--    </li>-->
<!--    <li><a href="#">Portfolio</a></li>-->
<!--    <li><a href="#">Shop</a></li>-->
<!--    <li><a href="#">About us</a></li>-->
<!--    <li><a href="#">Contact us</a></li>-->
<!--</ul>-->