<?php

/*

type: layout

name: portfolio

description: portfolio

*/
?>
<?php if (!empty($data)): ?>
<?php
$count = 0;
$len =  count($data);
?>
<?php
    foreach ($data as $item): 

    $count++;
?>
<?php if($count == 1 or ($count-1) % 3 == 0) { ?>

<div class="row">
  <?php } ?>
  <div class="col-md-4 portfolio-item">
    <?php if($item['tn_image']):  ?>
    <a href="<?php print $item['link'] ?>" class="post-list-item-img" style="background-image:url('<?php print $item['tn_image']; ?>')"> </a>
    <?php endif; ?>
    <h3> <a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a> </h3>
    <p><?php print $item['description']; ?></p>
  </div>
  <?php if($count % 3 == 0 or $count == $len){ ?>
</div>
<?php  } ?>
<?php endforeach ; ?>
<?php endif; ?>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
<div class="row text-center">
  <div class="col-lg-12"> <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}&limit=7") ?> </div>
</div>
<?php endif; ?>
