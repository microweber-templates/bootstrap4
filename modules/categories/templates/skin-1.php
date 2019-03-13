<?php

/*

type: layout

name: Portfolio

description: Portfolio

*/

?>


<?php
$params['ul_class'] = 'list-masonry-grid-works-filter js-masonry-grid-works-filter';
$params['li_class'] = 'list-masonry-grid-works-filter__item';
$params['link'] = '<a data-item-id="{id}" class="list-masonry-grid-works-filter__link btn btn-primary menu_element_link {active_class} {exteded_classes} {nest_level} {a_class}"  href="#" data-filter=".js-masonry-grid-works__item_{id}"><span>{title}</span></a>';

?>
<script>
    $(document).ready(function () {
        $('.js-cats > ul').prepend('   <li class="list-masonry-grid-works-filter__item"> <a class="list-masonry-grid-works-filter__link list-masonry-grid-works-filter__link_active btn btn-danger" href="#" data-filter="*">All</a> </li>');
    })
</script>
<div class="page-section_images__filter m-b-30 js-cats">
    <?php category_tree($params); ?>
</div>

