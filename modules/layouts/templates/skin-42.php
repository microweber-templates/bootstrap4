<?php

/*

type: layout

name: Teamcard

position: 42

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

<section class="section <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-42-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="teamcard" template="skin-1" />
    </div>
</section>