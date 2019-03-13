<?php

/*

type: layout

name: Home Slider

position: 29

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-17 safe-mode nodrop" field="layout-skin-29-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid p-0">
        <module type="bxslider" />
    </div>
</section>