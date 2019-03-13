<?php

/*

type: layout

name: Portfolio

description: Portfolio items

*/
?>

<div class="masonry-grid-works js-masonry-grid-works">
    <div class="masonry-grid-works__sizer masonry-grid-works__sizer_w-33 js-masonry-grid-works__sizer"></div>
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <?php $categories = get_categories_for_content($item['id']);
            $filterCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $filterCats .= 'js-masonry-grid-works__item_' . $category['id'] . ' ';
                }
            }
            ?>

            <div class="masonry-grid-works__item masonry-grid-works__item_w-33 js-masonry-grid-works__item <?php print $filterCats; ?>" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <a class="image-link" href="<?php print $item['link'] ?>" itemprop="url" title="<?php print $item['title'] ?>">
                    <figure class="image-holder">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <img class="image-holder__img" src="<?php print thumbnail($item['image'], 450, 450); ?>" alt=""/><i class="image-holder__icon"></i>
                        <?php endif; ?>

                        <figcaption class="image-holder__descr">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <h3 class="image-holder__heading"><?php print $item['title'] ?></h3>
                            <?php endif; ?>
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                <p class="image-holder__description" itemprop="description"><?php print $item['description'] ?></p>
                            <?php endif; ?>
                        </figcaption>
                    </figure>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
