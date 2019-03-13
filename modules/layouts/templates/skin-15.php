<?php

/*

type: layout

name: Call To Action

position: 15

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

<section class="section-14 <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-15-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <h2><?php print _lang('Let\'s Start Together', 'templates / qtheme'); ?></h2>

        <module type="btn" text="Download" button_style="btn-primary" button_size="btn-lg"/>
    </div>
</section>