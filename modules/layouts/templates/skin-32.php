<?php

/*

type: layout

name: Video + Counters

position: 32

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-80';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-80';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-20 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-32-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row flexbox-container">
            <div class="col-md-6 img-holder">

                <div class="div-table">
                    <div class="div-table-cell">
                        <div class="decoration"></div>
                        <div class="mw-waves-btn inverse">
                            <div class="w-btn">
                                <a class="popup-vimeo" href="https://vimeo.com/279249292"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="waves-holder">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>

                        <div class="img">
                            <img src="<?php print template_url(); ?>assets/img/section-20/image.png"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 right-side">
                <div class="allow-drop">
                    <h3><?php print _lang('Meet the Platform', 'templates/qtheme'); ?></h3>
                    <p><?php print _lang('Our software and features evolve constantly to bring you the best VR experience available. It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout.', 'templates/qtheme'); ?> </p>
                    <p><?php print _lang('The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable
                        English.', 'templates/qtheme'); ?></p>
                </div>

                <div class="features">
                    <div class="feature cloneable">
                        <div>
                            <span class="count js-start-from-zero safe-element" data-counter>540+</span><span class="count safe-element">+</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="title"><?php print _lang('Games to play', 'templates/qtheme'); ?></div>
                    </div>

                    <div class="feature cloneable">
                        <div>
                            <span class="count js-start-from-zero safe-element" data-counter>12</span><span class="count safe-element">h</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="title"><?php print _lang('Battery life', 'templates/qtheme'); ?></div>
                    </div>

                    <div class="feature cloneable">
                        <div>
                            <span class="count js-start-from-zero safe-element" data-counter>225</span><span class="count safe-element">K</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="title"><?php print _lang('Community members', 'templates/qtheme'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>