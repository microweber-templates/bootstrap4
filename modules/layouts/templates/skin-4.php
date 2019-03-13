<?php

/*

type: layout

name: Features

position: 4

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

<section class="section-3 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="material-icons safe-element">fingerprint</i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Unique and Modern', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                        <module type="btn" text="Read More" button_style="btn-primary" button_size="btn-md" class="fx-particles-1"/>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="material-icons safe-element">pan_tool</i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Easy to Customize', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                        <module type="btn" text="Read More" button_style="btn-primary" button_size="btn-md" class="fx-particles-1"/>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="material-icons safe-element">layers</i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Multipurpose Layout', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                        <module type="btn" text="Read More" button_style="btn-primary" button_size="btn-md" class="fx-particles-1"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>