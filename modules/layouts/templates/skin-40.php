<?php

/*

type: layout

name: Three columns with Image

position: 40

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

<section class="section padding <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-40-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-4 allow-drop cloneable">
                <p><?php print _lang('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    fivecenturies, but also the leap into electronic typesetting, remaining essentially unchanged.', 'templates / qtheme'); ?></p>
            </div>

            <div class="col-md-4 allow-drop cloneable">
                <p><?php print _lang('It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'templates/qtheme'); ?></p>
            </div>

            <div class="col-md-4 text-center cloneable">
                <img src="<?php print template_url(); ?>assets/uploads/woman.png"/>
            </div>
        </div>
    </div>
</section>