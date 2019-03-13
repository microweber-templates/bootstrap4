<?php

/*

type: layout

name: Heading with Image

position: 39

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-29 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-39-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-6 allow-drop cloneable">
                <h1 class="m-t-40"><?php print _lang('About Us', 'templates/qtheme'); ?></h1>
                <p><?php print _lang('A real award wining company with extraordinary<br /> team & creative minimal lovers', 'templates/qtheme'); ?></p>
            </div>

            <div class="col-md-6 text-center cloneable">
                <img src="<?php print template_url(); ?>assets/img/section-29/placeholder.png"/>
            </div>
        </div>
    </div>
</section>
