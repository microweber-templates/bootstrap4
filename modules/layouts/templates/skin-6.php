<?php

/*

type: layout

name: Left Image - Right Text

position: 6

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

<section class="section-5 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row flexbox-container">
            <div class="col-md-6 img-holder fx-deactivate allow-drop">
                <img src="<?php print template_url(); ?>assets/img/section-5/mockup.png"/>
            </div>

            <div class="col-md-6 right-side fx-deactivate allow-drop">
                <h3><?php print _lang('How to Use It?', 'templates/qtheme'); ?></h3>
                <p><?php print _lang('Mean Quality in the design and development. We are here to change the way you publish in the web. Use this theme pepared for your needs and connected to the best open source drag and drop website builder and CMS Microweber. Trust of Quality support and features that you
                    allways want.', 'templates/qtheme'); ?></p>

                <p><br/><strong><?php print _lang('Discover our best ever services', 'templates/qtheme'); ?></strong><br/><br/></p>
                <module type="btn" text="<?php print _lang('Click Here', 'templates/qtheme'); ?>" button_style="btn-default" button_size="btn-lg" class=" fx-particles-1"/>
            </div>
        </div>
    </div>
</section>