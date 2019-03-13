<?php

/*

type: layout

name: Cards

position: 17

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-17-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row blog-posts">
            <div class="col-md-4 cloneable">
                <div class="post">
                    <div class="image" style="background-image: url('<?php print template_url(); ?>assets/uploads/post1.jpg');"></div>
                    <div class="description allow-drop">
                        <h3><?php print _lang('Blog post with a image', 'templates/qtheme'); ?></h3>
                        <div>
                            <p><?php print _lang('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy...', 'templates / qtheme'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 cloneable">
                <div class="post">
                    <div class="image" style="background-image: url('<?php print template_url(); ?>assets/uploads/post2.jpg');"></div>
                    <div class="description allow-drop">
                        <h3><?php print _lang('Blog post with a image', 'templates/qtheme'); ?></h3>
                        <div>
                            <p><?php print _lang('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy...', 'templates / qtheme'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 cloneable">
                <div class="post">
                    <div class="image" style="background-image: url('<?php print template_url(); ?>assets/uploads/post3.jpg');"></div>
                    <div class="description allow-drop">
                        <h3><?php print _lang('Blog post with a image', 'templates/qtheme'); ?></h3>
                        <div>
                            <p><?php print _lang('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy...', 'templates / qtheme'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>