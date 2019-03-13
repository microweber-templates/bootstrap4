<?php

/*

type: layout

name: Features & Mockup

position: 12

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

<section class="section-12 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row flexbox-container">
            <div class="left-side fx-deactivate">
                <div class="feature cloneable">
                    <div class="icon"><i class="material-icons safe-element">mobile_friendly</i></div>
                    <div class="text allow-drop">
                        <h3><?php print _lang('Great Mobile App', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking', 'templates/qtheme'); ?></p>
                    </div>
                </div>

                <div class="feature cloneable">
                    <div class="icon"><i class="material-icons safe-element">remove_red_eye</i></div>
                    <div class="text allow-drop">
                        <h3><?php print _lang('Easy to Use', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking', 'templates/qtheme'); ?> </p>
                    </div>
                </div>

                <div class="feature cloneable">
                    <div class="icon"><i class="material-icons safe-element">format_color_fill</i></div>
                    <div class="text allow-drop">
                        <h3><?php print _lang('Beautifull Design', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking', 'templates/qtheme'); ?> </p>
                    </div>
                </div>
            </div>

            <div class="img-holder fx-deactivate allow-drop"><img src="<?php print template_url(); ?>assets/img/section-12/mockup.png"/></div>

            <div class="right-side fx-deactivate">
                <div class="feature cloneable">
                    <div class="icon"><i class="material-icons safe-element">dashboard</i></div>
                    <div class="text allow-drop">
                        <h3><?php print _lang('Great Mobile App', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking', 'templates/qtheme'); ?></p>
                    </div>
                </div>

                <div class="feature cloneable">
                    <div class="icon"><i class="material-icons safe-element">high_quality</i></div>
                    <div class="text allow-drop">
                        <h3><?php print _lang('Easy to Use', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking', 'templates/qtheme'); ?> </p>
                    </div>
                </div>

                <div class="feature cloneable">
                    <div class="icon"><i class="material-icons safe-element">airplanemode_active</i></div>
                    <div class="text allow-drop">
                        <h3><?php print _lang('Beautifull Design', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page when looking', 'templates/qtheme'); ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>