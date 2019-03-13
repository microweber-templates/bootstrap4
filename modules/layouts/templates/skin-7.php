<?php

/*

type: layout

name: Features

position: 7

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

<section class="section-7 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="material-icons safe-element">important_devices</i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Fully Responsive Design Layouts', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="material-icons safe-element">code</i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Clean and Proffesional Code', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="material-icons safe-element">view_carousel</i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Hungreds of Modern Design Layouts', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="fa fa-html5 safe-element"></i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Valid HTML 5 and CSS 3', 'templates/qtheme'); ?> </h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="fa fa-css3 safe-element"></i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Build With Bootstrap', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fx-deactivate cloneable">
                <div class="feature fx-border">
                    <div class="icon">
                        <i class="material-icons safe-element">shopping_cart</i>
                    </div>

                    <div class="allow-drop">
                        <h3><?php print _lang('Use website, blog and online store', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'templates/qtheme'); ?><br/><br/></p>
                    </div>
                </div>
            </div>
        </div>

        <div clas="row fx-deactivate">
            <div class="col-xs-12 allow-drop">
                <br/>
                <module type="btn" text="<?php print _lang('See More', 'templates/qtheme'); ?>" button_style="btn-primary" button_size="btn-sm"/>
            </div>
        </div>
    </div>
</section>