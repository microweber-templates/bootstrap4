<?php

/*

type: layout

name: Features

position: 36

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-23 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-36-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-3 cloneable">
                <div class="feature">
                    <div class="icon">
                        <i class="material-icons safe-element">fingerprint</i>
                    </div>
                    <div class="title">
                        <span class="safe-element">01.</span>
                        <h3><?php print _lang('Development and Design', 'templates/qtheme'); ?></h3>
                    </div>
                    <p><?php print _lang('We help you by savingtime and efforts, deliveringgreat quality', 'templates/qtheme'); ?></p>
                </div>
            </div>

            <div class="col-md-3 cloneable">
                <div class="feature">
                    <div class="icon">
                        <i class="material-icons safe-element">fingerprint</i>
                    </div>

                    <div class="title">
                        <span class="safe-element">02.</span>
                        <h3><?php print _lang('Clean and Professional Code', 'templates/qtheme'); ?></h3>
                    </div>

                    <p><?php print _lang('We provide custom development using the latest trends of codding on internet', 'templates/qtheme'); ?></p>
                </div>
            </div>

            <div class="col-md-3 cloneable">
                <div class="feature">
                    <div class="icon">
                        <i class="material-icons safe-element">pan_tool</i>
                    </div>

                    <div class="title">
                        <span class="safe-element">03.</span>
                        <h3><?php print _lang('Following the latest trends', 'templates/qtheme'); ?></h3>
                    </div>

                    <p><?php print _lang('We provide custom development using the latest trends of codding on internet', 'templates/qtheme'); ?></p>
                </div>
            </div>

            <div class="col-md-3 cloneable">
                <div class="feature">
                    <div class="icon">
                        <i class="material-icons safe-element">shopping_cart</i>
                    </div>

                    <div class="title">
                        <span class="safe-element">04.</span>
                        <h3><?php print _lang('Sell online with great marketing', 'templates/qtheme'); ?></h3>
                    </div>

                    <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page', 'templates/qtheme'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>