<?php

/*

type: layout

name: Checkout

description: Checkout

*/


?>
<div class="checkout-modal">
    <div>
        <?php if ($requires_registration and is_logged() == false): ?>

            <script>
                $(document).ready(function () {
                    $('#loginModal').modal();
                })
            </script>


        <?php else: ?>
            <div class="clear"></div>
            <?php if ($payment_success == false): ?>


            <form class="mw-checkout-form" id="checkout_form_<?php print $params['id'] ?>" method="post">


                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>


                        <script>
                            $(document).ready(function () {


                                $('.step-button:nth-child(1) .js-show-step').addClass('active');
                                $('.js-step-content:nth-child(1)').show();

                                cartModalBindButtons();

                            });
                        </script>
                        <div class="row">
                            <div class="col-xs-3 step-button">
                                <a href="#" class="js-show-step" data-step="shopping-cart">
                                    <i class="material-icons">shopping_cart</i>
                                    <span><span class="hidden-xs">Shopping</span> Cart</span>
                                </a>
                            </div>
                            <div class="col-xs-3 step-button muted">
                                <a href="#" class="js-show-step" data-step="delivery-address">
                                    <i class="material-icons">local_shipping</i>
                                    <span>Delivery <span class="hidden-xs">Address</span></span>
                                </a>
                            </div>
                            <div class="col-xs-3 step-button muted">
                                <a href="#" class="js-show-step" data-step="payment-method">
                                    <i class="material-icons">payment</i>
                                    <span>Payment <span class="hidden-xs">Method</span></span>
                                </a>
                            </div>
                            <div class="col-xs-3 step-button muted">
                                <a href="#" class="js-show-step" data-step="preview">
                                    <i class="material-icons">remove_red_eye</i>
                                    <span>Preview</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="js-step-content js-shopping-cart">


                            <?php $cart_show_enanbled = get_option('data-show-cart', $params['id']); ?>
                            <?php if ($cart_show_enanbled != 'n'): ?>
                                <br/>
                                <module type="shop/cart" template="small_modal" data-checkout-link-enabled="n"
                                        id="cart_checkout_<?php print $params['id'] ?>"/>

                            <?php endif; ?>


                        </div>
                        <div class="js-step-content js-delivery-address">


                            <module type="shop/shipping"/>

                            <div class="m-t-10">
                                <a href="#" class="btn btn-default btn-lg btn-block js-show-step" data-step="payment-method">Continue</a>
                            </div>
                        </div>

                        <div class="js-step-content js-payment-method">
                            <hr>

                            <div class="m-t-20">


                                <module type="shop/payments"/>


                                <div class="mw-cart-action-holder">


                                    <hr/>

                                    <module type="shop/checkout/terms" />

                                    <?php $shop_page = get_content('is_shop=1'); ?>
                                    <button class="btn btn-default btn-lg btn-block"
                                            onclick="mw.cart.checkout('#checkout_form_<?php print $params['id'] ?>');"
                                            type="button"
                                            id="complete_order_button" <?php if ($terms): ?> disabled="disabled"   <?php endif; ?>>
                                        <?php _e("Complete order"); ?>
                                    </button>
                                    <?php if (is_array($shop_page)): ?>
                                        <?php

                                        /*<a href="<?php print page_link($shop_page[0]['id']); ?>" class="btn btn-default pull-left"
                                           type="button">
                                            <?php _e("Continue Shopping"); ?>
                                        </a>*/

                                        ?>
                                    <?php endif; ?>
                                    <div class="clear"></div>
                                </div>


                            </div>
                        </div>
                        <div class="js-step-content js-preview">
                            <div class="text-center p-40">
                                <h3>Thank you for your purchase!</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            <div class="mw-checkout-responce"></div>


        <?php else: ?>
            <h2>
                <?php _e("Your payment was successfull."); ?>
            </h2>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</div>