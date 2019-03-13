<?php

/*

type: layout

name: Shop products

position: 25

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-25-<?php print $params['id'] ?>" rel="module">
    <div class="container section-2 text-center element allow-drop">
        <h2><?php print _lang('Our Best Products', 'templates/qtheme'); ?></h2>
    </div>

    <div class="container">
        <module type="shop/products" />
    </div>
</section>
