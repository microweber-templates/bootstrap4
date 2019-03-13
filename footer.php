<?php if ($footer != 'true'): ?>

    <footer class="p-t-30 p-b-30">
        <div class="container">
            <div class="edit nodrop safe-mode" field="qtheme_footer" rel="global">
                <div class="row p-t-50 p-b-50 cloneable">
                    <div class="col-sm-6 allow-drop">
                        <span class="title safe-element"><?php print _lang('Subscribe for Newsletter', 'templates/qtheme'); ?></span>
                    </div>
                    <div class="col-sm-6 allow-drop">
                        <module type="newsletter" id="footer-newsletter"/>
                    </div>
                </div>

                <div class="row cloneable">
                    <div class="col-md-4 allow-drop">
                        <span class="title safe-element"><?php print _lang('Quality Theme', 'templates/qtheme'); ?></span>
                        <p><?php print _lang('Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Microweber PageMaker', 'templates/qtheme'); ?></p>

                        <module type="social_links" id="footer-socials"/>
                    </div>
                    <div class="col-sm-4 col-md-2 col-md-offset-2 hidden-xs allow-drop">
                        <span class="small-title safe-element"><?php print _lang('Menu', 'templates/qtheme'); ?></span>

                        <module type="menu" template="footer" name="footer_menu_1" id="footer_menu_1"/>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 allow-drop">
                        <span class="small-title safe-element"><?php print _lang('More links', 'templates/qtheme'); ?></span>
                        <module type="menu" template="footer" name="footer_menu_2" id="footer_menu_2"/>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 allow-drop">
                        <span class="small-title safe-element"><?php print _lang('Other links', 'templates/qtheme'); ?></span>
                        <module type="menu" template="footer" name="footer_menu_3" id="footer_menu_3"/>
                    </div>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12">
                    <p><?php print powered_by_link(); ?>. <?php print _e("All rights Reserved."); ?></p>
                </div>
            </div>

        </div>
    </footer>
<?php endif; ?>

</div>

<button id="to-top" class="btn" style="display: block;"></button>

<!-- Shopping Cart Modal -->
<div class="modal fade " id="shoppingCartModal" tabindex="-1" role="dialog" aria-labelledby="shoppingCartModalLabel">
    <div class="modal-dialog" role="document">
        <div type="shop/checkout" id="js-ajax-cart-checkout-process"></div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#loginModal').on('show.bs.modal', function (e) {
            $('#loginModalModuleLogin').reload_module();
            $('#loginModalModuleRegister').reload_module();
        })
        $('#shoppingCartModal').on('show.bs.modal', function (e) {
            $('#js-ajax-cart-checkout-process').reload_module();

        })

        $('.js-show-register-window').on('click', function () {
            $('.js-login-window').hide();
            $('.js-register-window').show();
        })
        $('.js-show-login-window').on('click', function () {

            $('.js-register-window').hide();
            $('.js-login-window').show();
        })
    })
</script>

<!-- Login Modal -->
<div class="modal  login-modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="js-login-window">
                    <div class="icon"><i class="material-icons">person</i></div>

                    <div type="users/login"  id="loginModalModuleLogin"></div>
                </div>

                <div class="js-register-window" style="display:none;">
                    <div class="icon"><i class="material-icons">exit_to_app</i></div>

                    <div type="users/register"  id="loginModalModuleRegister"></div>

                    <p class="or"><span>or</span></p>

                    <div class="act login">
                        <a href="#" class="js-show-login-window"><span>Back to Login</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (user_id()): ?>
    <!-- Orders Modal -->
    <div class="modal fade my-orders-modal" id="ordersModal" tabindex="-1" role="dialog" aria-labelledby="ordersModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <module type="users/orders"/>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Plugins -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en-GB&amp;key=AIzaSyDbN7i-eF7dlNNp-bxbERNomOGYpZld3B0"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?php print template_url(); ?>assets/plugins/bootstrap-4/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/slick/slick.min.js"></script>

<script src="<?php print template_url(); ?>assets/plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/masonry/isotope.pkgd.min.js"></script>

<script src="<?php print template_url(); ?>assets/js/main.js"></script>
</body>
</html>