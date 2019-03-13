<?php

/*

type: layout

name: Contact information

position: 26

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

<section class="section-16 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-26-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <h2><?php print _lang('Get in Touch with Us', 'templates/qtheme'); ?></h2>

        <div class="row">
            <div class="col-md-4 box-info">
                <div class="title"><i class="material-icons safe-element">location_on</i> <span class="safe-element"><?php print _lang('Address:', 'templates/qtheme'); ?></span></div>
                <p><?php print _lang('Sofia, Bulgaria<br/>
                    Bul. Cherni Vruh 84, Floore 4, Enter:1, Radioactive Company', 'templates/qtheme'); ?></p>
            </div>

            <div class="col-md-4 box-info">
                <div class="title"><i class="material-icons safe-element">email</i> <span class="safe-element"><?php print _lang('Contact Information:', 'templates/qtheme'); ?></span></div>
                <p>
                    <?php print _lang('P: Office 1: +359 887123 456<br/>
                    P: Main Reception: +359 2 123 456<br/>
                    E: q@microweber.com<br/>
                    W: http://microweber.com<br/>', 'templates/qtheme'); ?>
                </p>
            </div>

            <div class="col-md-4 box-info">
                <div class="title"><i class="material-icons safe-element">thumb_up</i> <span class="safe-element"><?php print _lang('Address:', 'templates/qtheme'); ?></span></div>
                <p><?php print _lang('Find us in a social networks', 'templates/qtheme'); ?></p>
                <module type="social_links"/>
            </div>
        </div>
    </div>
</section>