<?php include template_dir(). "header.php"; ?>

<div class="container">
  <div  class="edit" field="content" rel="content">
    <h2>Complete your order</h2>
    <div  class="edit" field="checkout_page" rel="content">
      <module type="shop/checkout" id="cart_checkout" />
    </div>
  </div>
</div>
<?php include template_dir().  "footer.php"; ?>
