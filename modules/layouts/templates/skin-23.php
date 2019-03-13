<?php

/*

type: layout

name: Pricing Table

position: 23

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> fx-deactivate fx-particles edit safe-mode nodrop" field="layout-skin-23-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <module type="pricing_table"/>
    </div>
</section>