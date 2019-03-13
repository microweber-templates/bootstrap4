<?php

/*

type: layout

name: Info with Images

position: 38

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

<section class="section-25 <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-38-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="allow-drop">
            <h2><?php print _lang('Thank You!', 'templates/qtheme'); ?></h2>
            <p><?php print _lang('Our unique value serve as the foundation for our business and our people.
                Thay guide us through our culture, our product development
                and the relationships we share with our partners.', 'templates/qtheme'); ?><br/><br/></p>
        </div>

        <div class="row imgs-holder cloneable">
            <div class="col-sm-6">
                <div class="img" style="background-image: url('<?php print template_url(); ?>assets/img/section-25/1.png');"></div>
            </div>
            <div class="col-sm-6">
                <div class="img" style="background-image: url('<?php print template_url(); ?>assets/img/section-25/2.png');"></div>
            </div>
        </div>

        <div class="allow-drop"></div>
    </div>
</section>
