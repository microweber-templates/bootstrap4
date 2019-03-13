<?php

/*

type: layout

name: Features

position: 41

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-27 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-41-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-3 p-t-20">
                <h3><?php print _lang('Digital <br/> Marketing <br/> Agency', 'templates/qtheme'); ?></h3>
                <h4><?php print _lang('Design and <br/>Development', 'templates/qtheme'); ?></h4>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 cloneable">
                        <div class="feature">
                            <div class="icon">
                                <i class="material-icons safe-element">favorite</i>
                            </div>

                            <h5>19,500</h5>
                            <p><?php print _lang('Happy Customers', 'templates/qtheme'); ?></p>
                        </div>
                    </div>

                    <div class="col-md-4 cloneable">
                        <div class="feature">
                            <div class="icon">
                                <i class="material-icons safe-element">cloud</i>
                            </div>

                            <h5>8,200</h5>
                            <p><?php print _lang('Cloud Servers', 'templates/qtheme'); ?></p>
                        </div>
                    </div>

                    <div class="col-md-4 cloneable">
                        <div class="feature">
                            <div class="icon">
                                <i class="material-icons safe-element">data_usage</i>
                            </div>

                            <h5>18,000</h5>
                            <p><?php print _lang('Daily Backups', 'templates/qtheme'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>