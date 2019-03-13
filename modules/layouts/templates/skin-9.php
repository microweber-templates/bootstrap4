<?php

/*

type: layout

name: Simple Title & Text & Button

position: 9

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

<section class="section-9 <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <h2><?php print _lang('Set Your Own Time for Phone Call.', 'templates/qtheme'); ?></h2>
        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>

        <module type="btn" text="<?php print _lang('See more', 'templates/qtheme'); ?>" button_style="btn-default" button_size="btn-lg" class=" fx-particles-2"/>
    </div>
</section>