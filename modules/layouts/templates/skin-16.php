<?php

/*

type: layout

name: Left image - Right Accordion

position: 16

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

<section class="section-15 <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row flexbox-container">
            <div class="col-md-6 img-holder">
                <img src="<?php print template_url(); ?>assets/img/section-15/mockup.png"/>
            </div>

            <div class="col-md-6 right-side">
                <module type="accordion"/>
            </div>
        </div>
    </div>
</section>