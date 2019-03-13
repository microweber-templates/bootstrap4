<?php

/*

type: layout

name: Background with Overlay & Text & Buttons

position: 11

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


<div data-parallax="" data-overlay="7" class="edit safe-mode nodrop" field="layout-skin-11-<?php print $params['id'] ?>" rel="module">
    <section class="section-11 background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/section-11/bg.jpg');">
        <div class="container <?php print $layout_classes; ?> allow-drop">
            <h2 class="fx-deactivate"><?php print _lang('Download App', 'templates/qtheme'); ?></h2>
            <p class="fx-deactivate"><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be', 'templates/qtheme'); ?> </p>

            <br/><br/>
            <br/><br/>

            <div class="nodrop">
                <a href="#" class="btn btn-default btn-lg fx-deactivate cloneable"><img src="<?php print template_url(); ?>assets/img/section-11/google-store.png"/></a>
                <a href="#" class="btn btn-default btn-lg fx-deactivate cloneable"><img src="<?php print template_url(); ?>assets/img/section-11/apple-store.png"/></a>
                <a href="#" class="btn btn-default btn-lg fx-deactivate cloneable"><img src="<?php print template_url(); ?>assets/img/section-11/windows-store.png"/></a>
            </div>

            <br/>
        </div>
    </section>
</div>