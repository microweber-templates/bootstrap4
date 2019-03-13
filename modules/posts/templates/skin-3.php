<?php

/*

type: layout

name: Related Projects

description: skin-3

*/
?>

<div class="row portfolio-projects">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <div class="col-md-4" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="project">
                    <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                        <a href="<?php print $item['link'] ?>" itemprop="url">
                            <div class="image" style="background-image: url('<?php print thumbnail($item['image'], 450, 450, true); ?>');">
                                <div class="hover">
                                    <a href="#" class="btn btn-default"><i class="material-icons">remove_red_eye</i></a>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
