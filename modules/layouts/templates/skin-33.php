<?php

/*

type: layout

name: Call To Action

position: 33

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

<div data-overlay="8" data-overlay-inverse="" class="edit safe-mode nodrop" field="layout-skin-33-<?php print $params['id'] ?>" rel="module">


    <section class="section-21 background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/section-21/bg.png');">
        <div class="container p-t-100 p-b-100">

            <div class="row">
                <div class="col-md-6 allow-drop">
                    <h2><?php print _lang('Want to Join the Community', 'templates/qtheme'); ?></h2>
                    <p><?php print _lang('It’s easy, lets gets started', 'templates/qtheme'); ?></p>
                    <br/>
                    <br/>
                    <module type="btn" button_style="btn-info btn-lg" text="<?php print _lang('Get started', 'templates/qtheme'); ?>"/>
                    <p></p>
                </div>

                <div class="col-md-6">
                    <module type="contact_form" template="skin-1"/>
                </div>
            </div>
        </div>
    </section>
</div>