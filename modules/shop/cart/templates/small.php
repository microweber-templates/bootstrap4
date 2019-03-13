<?php

/*

type: layout

name: Small

description: Small

*/
?>

<?php $total = cart_sum(); ?>

<div class="shopping-cart-holder">
    <?php if (is_array($data)) : ?>
        <?php foreach ($data as $item) : ?>
            <div class="row product">
                <div class="col-xs-12">
                    <h5><?php print $item['title'] ?> <span class="qty">x<?php print $item['qty'] ?></span></h5>
                    <div class="m-t-5">
                        <a href="javascript:mw.cart.remove('<?php print $item['id'] ?>');" class="remove"><i class="material-icons">close</i></a>

                        <span class="price"><?php print currency_format($item['price'] * $item['qty']); ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <div class="row total">
        <div class="col-xs-12">
            <p>Total: <?php print currency_format($total); ?></p>
        </div>
        <?php if ($total != 0): ?>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#shoppingCartModal">Checkout</button>
        <?php endif; ?>
    </div>
</div>