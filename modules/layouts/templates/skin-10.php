<?php

/*

type: layout

name: Tabs

position: 10

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-10 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="tabs" default_content="1" />
    </div>
</section>