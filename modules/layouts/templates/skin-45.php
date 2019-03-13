<?php

/*

type: layout

name: Error

position: 45

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

<section class="section-30 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-45-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="mockup-block fx-deactivate element">
            <div class="elements-holder">
                <div class="comet fx-deactivate"></div>

                <div class="planet">
                    <img src="<?php print template_url(); ?>assets/img/section-1/planet.png"/>
                </div>
            </div>
        </div>

        <div class="info-block allow-drop">
            <h1 class="fx-deactivate">404</h1>
            <h2 class="fx-deactivate"><?php print _lang('Something went wrong', 'templates/qtheme'); ?></h2>
            <p class="fx-deactivate"><?php print _lang('The page you are looking for was moved, removed, renamed or might never exsted.', 'templates/qtheme'); ?></p>
        </div>
    </div>
</section>