<?php

/*

type: layout

name: Contact form

position: 27

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

<div class="safe-mode nodrop" field="layout-skin-27-<?php print $params['id'] ?>" rel="module">
    <module type="contact_form"/>
</div>