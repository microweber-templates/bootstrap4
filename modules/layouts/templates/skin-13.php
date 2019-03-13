<?php

/*

type: layout

name: Customer Reviews Slider

position: 13

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

<section class="section-13 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="container text allow-drop">
        <h2 class="fx-deactivate"><?php print _lang('Customers Review', 'templates/qtheme'); ?></h2>
        <p class="fx-deactivate"><?php print _lang('Thank you to all our customrer for the trust. Here is what you says.', 'templates/qtheme'); ?></p>
    </div>

    <div class="container m-t-10 fx-deactivate">
        <module type="testimonials" />
    </div>
</section>