<?php

/*

type: layout

name: Mockup Slider

position: 24

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-24-<?php print $params['id'] ?>" rel="module">
    <section class="section-6 p-t-70 p-b-100">
        <div class="planet"></div>
        <div class="container p-b-100">
            <div class="row fx-deactivate">
                <div class="col-md-12 allow-drop">
                    <h2><?php print _lang('Mobile Application in Use', 'templates/qtheme'); ?></h2>
                    <p><?php print _lang('Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'templates / qtheme'); ?></p>
                </div>
            </div>

            <div class="slider-wrapper m-t-80 p-b-100 fx-deactivate">
                <module type="slickslider"/>
            </div>
        </div>
    </section>
</div>