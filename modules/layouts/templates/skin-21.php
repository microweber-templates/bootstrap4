<?php

/*

type: layout

name: Cards

position: 21

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

<section class="section <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-21-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row teamcard">
            <div class="col-sm-6 col-md-3 cloneable">
                <div class="member">
                    <div class="image" style="background-image: url('<?php print template_url(); ?>assets/uploads/team1.jpg');"></div>
                    <div class="description allow-drop">
                        <h3><?php print _lang('Jinna Tomson', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('Manager', 'templates/qtheme'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 cloneable">
                <div class="member">
                    <div class="image" style="background-image: url('<?php print template_url(); ?>assets/uploads/team2.jpg');"></div>
                    <div class="description allow-drop">
                        <h3><?php print _lang('BH Sokolov', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('Web designer', 'templates/qtheme'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 cloneable">
                <div class="member">
                    <div class="image" style="background-image: url('<?php print template_url(); ?>assets/uploads/team3.jpg');"></div>
                    <div class="description allow-drop">
                        <h3><?php print _lang('Tania Hummary', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('Best in Sales', 'templates/qtheme'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 cloneable">
                <div class="member">
                    <div class="image" style="background-image: url('<?php print template_url(); ?>assets/uploads/team4.jpg');"></div>
                    <div class="description allow-drop">
                        <h3><?php print _lang('John Doe', 'templates/qtheme'); ?></h3>
                        <p><?php print _lang('Developer', 'templates/qtheme'); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>