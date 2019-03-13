<?php

/*

type: layout

name: Features + Counter + Mockup

position: 8

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

<section class="section-8 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container" style="background-image: url('<?php print template_url(); ?>assets/img/section-8/world_map.png');">
        <div class="row features">
            <div class="col-sm-6 col-md-3 fx-deactivate cloneable">
                <div class="feature">
                    <div class="icon">
                        <i class="material-icons safe-element">folder_special</i>
                    </div>
                    <div class="label">
                        <span class="title safe-element"><?php print _lang('App downloads', 'templates/qtheme'); ?></span>
                        <span class="count js-start-from-zero safe-element" data-counter>14540</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 fx-deactivate cloneable">
                <div class="feature">
                    <div class="icon">
                        <i class="material-icons safe-element">folder_shared</i>
                    </div>
                    <div class="label">
                        <span class="title safe-element"><?php print _lang('Happy Customers', 'templates/qtheme'); ?></span>
                        <span class="count js-start-from-zero safe-element" data-counter>2350</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 fx-deactivate cloneable">
                <div class="feature">
                    <div class="icon">
                        <i class="material-icons safe-element">supervised_user_circle</i>
                    </div>
                    <div class="label">
                        <span class="title safe-element"><?php print _lang('Active Accounts', 'templates/qtheme'); ?></span>
                        <span class="count js-start-from-zero safe-element" data-counter>12500</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 fx-deactivate cloneable">
                <div class="feature">
                    <div class="icon">
                        <i class="material-icons safe-element">stars</i>
                    </div>
                    <div class="label">
                        <span class="title safe-element"><?php print _lang('Application Rating', 'templates/qtheme'); ?></span>
                        <span class="count js-start-from-zero safe-element" data-counter>3466</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row flexbox-container">
            <div class="col-md-6 left-side fx-deactivate allow-drop">
                <h3><?php print _lang('Short Video of 1 min.', 'templates/qtheme'); ?></h3>

                <p><?php print _lang('It is a long established fact that a reader will be distracted by the readable content of a page Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen', 'templates / qtheme'); ?></p>

                <module type="btn" text="<?php print _lang('See more', 'templates/qtheme'); ?>" button_style="btn-primary" button_size="btn-sm"/>
            </div>

            <div class="col-md-6 img-holder fx-deactivate allow-drop">
                <div class="div-table">
                    <div class="div-table-cell">
                        <div class="mw-waves-btn">
                            <div class="w-btn">
                                <a class="popup-vimeo" href="https://vimeo.com/279249292"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="waves-holder">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <img src="<?php print template_url(); ?>assets/img/section-8/mockup.png"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>