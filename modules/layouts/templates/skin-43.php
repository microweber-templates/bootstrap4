<?php

/*

type: layout

name: Parallax with Info

position: 43

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

<div data-parallax="" data-overlay="5" data-overlay-black="" class="edit safe-mode nodrop" field="layout-skin-43-<?php print $params['id'] ?>" rel="module">
    <section class="section-26 background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/section-11/bg2.jpg');">
        <div class="container <?php print $layout_classes; ?> allow-drop">
            <h2 class="fx-deactivate"><?php print _lang('Welcome to Our Office', 'templates/qtheme'); ?></h2>
            <p class="fx-deactivate"><?php print _lang('We will be glad to meet you', 'templates/qtheme'); ?></p>
        </div>
    </section>
</div>