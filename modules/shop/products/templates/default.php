<?php

/*

type: layout

name: Default

description: Default - 3 Columns

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
  <div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
      <?php if($item['tn_image']):  ?>
    <a href="<?php print $item['link'] ?>" class="post-list-item-img" style="background-image:url('<?php print $item['tn_image']; ?>')"> </a>
      <?php endif; ?>
      <div class="caption">
        <h4 class="text-center"><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h4>
        <p><?php print $item['description']; ?></p>
      </div>
      <div class="product-price-holder">
        <?php if($item['price']): ?>
        <h4 class="text-center"><?php print currency_format($item['price']); ?></h4>
        <div class="text-center">
          <button class="btn btn-default" type="button" onclick="mw.cart.add_item('<?php print $item['id'] ?>');"><i class="icon-shopping-cart glyphicon glyphicon-shopping-cart"></i>&nbsp;<?php print $add_cart_text ?></button>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php if($count % 3 == 0 or $count == $len){ ?>
</div>
<?php  } ?>
<?php endforeach ; ?>
<?php endif; ?>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
<?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}&limit=7") ?>
<?php endif; ?>
