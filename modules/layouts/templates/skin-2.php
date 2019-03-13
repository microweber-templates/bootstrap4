<?php

/*

type: layout

name: Home banner

position: 2

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

<section class="section-1 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="flexbox-container">
            <div class="info-block allow-drop">
                <h1 class="fx-deactivate"><?php print _lang('Is a Beautyfull Theme', 'templates/qtheme'); ?></h1>
                <p class="fx-deactivate"><?php print _lang('Digital agency with great team of designers and developers with many ears of expirience.
                    We powered this theme on Microweber website builder and drag & drop CMS.
                    Trust Q-uality of this template, preperat on one of the best open-source website builderon internet, Microweber.', 'templates/qtheme'); ?></p>

                <div class="m-t-80 nodrop">
                    <div class="mw-waves-btn cloneable">
                        <div class="w-btn">
                            <a class="popup-vimeo" href="https://vimeo.com/279249292"><i class="fa fa-play"></i> <span><?php print _lang('Play video', 'templates/qtheme'); ?></span></a>
                        </div>
                        <div class="waves-holder">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                    <a href="#" class="m-l-10 btn btn-default btn-lg cloneable fx-particles-2"><img src="<?php print template_url(); ?>assets/img/section-1/google-store.png"/></a>
                    <a href="#" class="m-l-10 btn btn-default btn-lg cloneable fx-particles-2"><img src="<?php print template_url(); ?>assets/img/section-1/apple-store.png"/></a>
                </div>
            </div>
            <div class="mockup-block fx-deactivate">
                <div class="elements-holder">

                    <div class="mockup">
                        <img src="<?php print template_url(); ?>assets/img/section-1/mockup_all.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>