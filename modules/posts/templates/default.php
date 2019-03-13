<?php

/*

type: layout

name: Default

description: Three columns

*/
?>

<div class="row blog-posts">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <div class="col-md-4" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="post">
                    <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                        <div class="image" style="background-image: url('<?php print thumbnail($item['image'], 450, 450, true); ?>');">
                            <div class="hover">
                                <a href="<?php print $item['link'] ?>" itemprop="url" class="btn btn-default"><i class="material-icons">remove_red_eye</i></a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="description">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                            <a href="<?php print $item['link'] ?>" itemprop="url"><h3><?php print $item['title'] ?></h3></a>
                        <?php endif; ?>
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                            <p itemprop="description"><?php print $item['description'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
