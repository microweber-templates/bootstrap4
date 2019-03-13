<?php

/*

type: layout

name: Testimonials

position: 37

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-80';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div data-parallax="" data-overlay="1" class="edit safe-mode nodrop" field="layout-skin-37-<?php print $params['id'] ?>" rel="module">
    <section class="section-24 <?php print $layout_classes; ?> background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/section-24/bg.png');">
        <div class="container">
            <div class="row">
                <module type="testimonials" template="skin-1"/>
            </div>
        </div>
    </section>
</div>