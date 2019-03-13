<?php

/*

type: layout

name: Advertisement Banner

position: 31

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-80';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-80';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-19 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-31-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row flexbox-container">
            <div class="col-md-6 left-side">
                <h3><?php print _lang('Two Different Sizes. <br/>Same Great Experience.', 'templates/qtheme'); ?></h3>
                <div class="allow-drop">
                    <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?></p>
                </div>

                <div class="prices">
                    <div class="price-holder cloneable">
                        <div class="model">32<span>GB</span></div>
                        <div class="price">$199 USD</div>
                    </div>

                    <div class="price-holder cloneable">
                        <div class="model">64<span>GB</span></div>
                        <div class="price">$249 USD</div>
                    </div>
                </div>

                <module type="btn" text="<?php print _lang('Buy', 'templates/qtheme'); ?>" button_style="btn-default btn-lg" class="m-t-10"/>
            </div>

            <div class="col-md-6 img-holder">
                <img src="<?php print template_url(); ?>assets/img/section-18/image.png"/>
            </div>
        </div>
    </div>
</section>