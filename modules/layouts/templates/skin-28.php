<?php

/*

type: layout

name: Google map

position: 28

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

<section class="p-0 safe-mode nodrop" field="layout-skin-28-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid p-0">
        <module type="google_maps" class=" p-0"/>
    </div>
</section>