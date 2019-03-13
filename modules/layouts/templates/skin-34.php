<?php

/*

type: layout

name: Masonry Gallery with Filter

position: 34

*/

?>
<!--<module type="pictures" template="skin-4" />-->

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section p-t-50 p-b-50 edit safe-mode nodrop" field="layout-skin-34-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="masonry-gallery">
            <!-- isotope filter -->
            <div class="page-section_images__filter m-b-30">
                <ul class="list-masonry-grid-works-filter js-masonry-grid-works-filter">
                    <li class="list-masonry-grid-works-filter__item">
                        <a class="list-masonry-grid-works-filter__link list-masonry-grid-works-filter__link_active btn btn-danger" href="#" data-filter="*">All</a>
                    </li>
                    <li class="list-masonry-grid-works-filter__item">
                        <a class="list-masonry-grid-works-filter__link btn btn-primary" href="#" data-filter=".js-masonry-grid-works__item_products">Products</a>
                    </li>
                    <li class="list-masonry-grid-works-filter__item">
                        <a class="list-masonry-grid-works-filter__link btn btn-primary" href="#" data-filter=".js-masonry-grid-works__item_team">Team</a>
                    </li>
                </ul>
            </div>
            <!-- - isotope filter -->

            <!-- masonry grid -->
            <div class="masonry-grid-works js-masonry-grid-works js-popup-gallery">
                <div class="masonry-grid-works__sizer masonry-grid-works__sizer_w-25 js-masonry-grid-works__sizer"></div>
                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project1.jpg" title="Title of image">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project1.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_team">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project2.jpg" title="Title of image 2">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project2.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Team', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project3.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project3.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_team">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project4.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project4.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Team', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project5.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project5.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project6.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project6.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project7.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project7.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project8.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project8.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project9.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project9.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project10.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project10.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_products">
                    <a class="image-link" href="<?php print template_url(); ?>assets/uploads/project11.jpg">
                        <figure class="image-holder"><img class="image-holder__img" src="<?php print template_url(); ?>assets/uploads/project11.jpg" alt=""/><i class="image-holder__icon"></i>
                            <figcaption class="image-holder__descr">
                                <h3 class="image-holder__heading"><?php print _lang('Products', 'templates/qtheme'); ?></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- - masonry grid -->
        </div>
    </div>
</section>