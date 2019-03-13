<?php

/*

type: layout

name: Features

position: 35

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-22 <?php print $layout_classes; ?> m-t-50 edit safe-mode nodrop" field="layout-skin-35-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gradient-colors allow-drop">
                    <p><?php print _lang('Trust us for Your Next Successful Project', 'templates/qtheme'); ?></p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="col-md-6 cloneable">
                    <div class="feature">
                        <a href="#">
                            <div class="label-read-more"><?php print _lang('Read More', 'templates/qtheme'); ?></div>
                            <div class="icon">
                                <i class="material-icons safe-element">code</i>
                            </div>
                            <h3><?php print _lang('Clean and Professional Code', 'templates/qtheme'); ?></h3>
                            <div class="desc allow-drop">
                                <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page', 'templates/qtheme'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feature">
                        <a href="#">
                            <div class="label-read-more"><?php print _lang('Read More', 'templates/qtheme'); ?></div>
                            <div class="icon">
                                <i class="material-icons safe-element">layers</i>
                            </div>
                            <h3><?php print _lang('Hundred of Modern Layouts', 'templates/qtheme'); ?></h3>
                            <div class="desc allow-drop">
                                <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page', 'templates/qtheme'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feature">
                        <a href="#">
                            <div class="label-read-more"><?php print _lang('Read More', 'templates/qtheme'); ?></div>
                            <div class="icon">
                                <i class="material-icons safe-element">pan_tool</i>
                            </div>
                            <h3><?php print _lang('Build With Bootstrap', 'templates/qtheme'); ?></h3>
                            <div class="desc allow-drop">
                                <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page', 'templates/qtheme'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feature">
                        <a href="#">
                            <div class="label-read-more"><?php print _lang('Read More', 'templates/qtheme'); ?></div>
                            <div class="icon">
                                <i class="material-icons safe-element">shopping_cart</i>
                            </div>
                            <h3><?php print _lang('Create website, blog or online store', 'templates/qtheme'); ?></h3>
                            <div class="desc allow-drop">
                                <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page', 'templates/qtheme'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>