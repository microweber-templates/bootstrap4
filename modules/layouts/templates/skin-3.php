<?php

/*

type: layout

name: Simple Title & Text

position: 3

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

<section class="section-2 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <h2 class="fx-deactivate"><?php print _lang('Handmade Elements', 'templates/qtheme'); ?></h2>
        <p class="fx-deactivate"><?php print _lang('@Microweber, we are strict to the detail of each element. During our process of creating the Q template we carefully planning and thinking about each situation can appear. Take a look some of the theme features.', 'templates/qtheme'); ?></p>
    </div>
</section>