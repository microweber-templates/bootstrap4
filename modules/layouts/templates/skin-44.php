<?php

/*

type: layout

name: Tabs

position: 44

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

<section class="section-28 section-silver <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-44-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="allow-drop">
            <h4 class="fx-deactivate"><?php print _lang('Digital Expirience', 'templates/qtheme'); ?></h4>
            <h5 class="fx-deactivate"><?php print _lang('Know More About Our History', 'templates/qtheme'); ?></h5>
            <br/>
            <br/>
        </div>

        <module type="tabs" template="skin-1"/>
    </div>
</section>
