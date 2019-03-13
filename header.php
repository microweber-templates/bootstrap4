<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>

    <title>{content_meta_title}</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:title" content="{content_meta_title}"/>
    <meta name="keywords" content="{content_meta_keywords}"/>
    <meta name="description" content="{content_meta_description}"/>
    <meta property="og:type" content="{og_type}"/>
    <meta property="og:url" content="{content_url}"/>
    <meta property="og:image" content="{content_image}"/>
    <meta property="og:description" content="{og_description}"/>
    <meta property="og:site_name" content="{og_site_name}"/>
    <script>mw.lib.require('material_icons');</script>
    <script>
        AddToCartModalContent = window.AddToCartModalContent || function (title) {
                var html = ''
                    + '<section style="text-align: center;">'
                    + '<h5>' + title + '</h5>'
                    + '<p><?php _e("has been added to your cart"); ?></p><br />'
                    + '<div><a href="javascript:;" onclick="mw.tools.modal.remove(\'#AddToCartModal\')" class="pull-left m-t-15"><?php _e("Continue shopping"); ?></a>'
                    + '<a href="<?php print checkout_url(); ?>" class="btn-d pull-right"><?php _e("Checkout"); ?></a></section><div class="clearfix"></div></div>';
                return html;
            }


        function cartModalBindButtons(step) {

            $('.js-show-step').off('click');
            $('.js-show-step').on('click', function () {

                var has_error = 0;
                var step = $(this).data('step');
                if (step == 'payment-method') {

                    $('.js-delivery-address input').each(function () {
                        if (!this.checkValidity()) {
                            mw.notification.warning('<?php _e("Please fill the required fields"); ?>');
                            // ..alert($(this).prop('name') + ' is not valid');
                            $(this).addClass('error');
                            has_error = 1;
                        } else {
                            $(this).removeClass('error');
                        }

                    });


                    if (has_error) {
                        step = 'delivery-address'
                    }

                    //     $('.js-delivery-address').
                }


                $('.js-show-step').removeClass('active');

                $('[data-step]').removeClass('active');
                $('[data-step="' + step + '"]').addClass('active').parent().removeClass('muted');


                step1 = '.js-' + step;
                $('.js-step-content').hide();
                $(step1).show();
                $(this).addClass('active');


            });


        }


        $(document).ready(function () {





//
//            $('#code').on('show.bs.modal', function (e) {
//                // do something...
//            })


            mw.on('mw.cart.add', function (event, data) {


                $("#shoppingCartModal").modal()
                //       $("#js-ajax-cart-checkout-process").reload_module()


//                if (document.getElementById('AddToCartModal') === null) {
//
//                    AddToCartModal = mw.modal({
//
//                        content: AddToCartModalContent(data.product.title),
//
//                        template: 'mw_modal_basic',
//
//                        name: "AddToCartModal",
//
//                        width: 400,
//
//                        height: 200
//
//                    });
//
//                }
//                else {
//                    AddToCartModal.container.innerHTML = AddToCartModalContent(data.product.title);
//
//                }
//
//                var currQty = parseInt($('#shopping-cart-quantity').text()) + 1;
//                $('#shopping-cart-quantity').text(currQty);
//
            });
        });
    </script>


    <script>

        $(document).ready(function () {
            mw.lib.require('bootstrap_select');
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker();

        });
    </script>


    <!-- Plugins Styles -->
    <link href="<?php print template_url(); ?>assets/css/scss/bootstrap.css" rel="stylesheet"/>
    <!-- Theme-->
    <link href="<?php print template_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet"/>

    <script>mw.lib.require('font_awesome5');</script>

    <link rel="stylesheet" type="text/css" href="<?php print template_url(); ?>assets/plugins/slick/slick.css"/>
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/plugins/bootstrap-select-1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/bootstrap4_custom.css">
    <link href="<?php print template_url(); ?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet"/>

    <link href="<?php print template_url(); ?>assets/css/typography.css" rel="stylesheet"/>
    <link href="<?php print template_url(); ?>assets/css/main.css" class="css-main" rel="stylesheet"/>
    <link href="<?php print template_url(); ?>assets/css/custom.css" rel="stylesheet"/>

    <link rel="stylesheet" href="<?php print template_url(); ?>assets/fonts/mw-icons-mind/line/style.css">
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/fonts/mw-icons-mind/solid/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!--
       ##################################################################
       ######### Set to body class = .member-nav-inverse  = for Inverse member navigation
       ######### Set to body class = .sticky-nav  = for sticky header
       ######### Set to body class = .titles-inverse  = for black title
       ######### Set to body class = .rounded-buttons  = for rounded buttons


       #########
       Create backgrounded section

       The Section must be wraped in div with parameters:
       data-overlay: set overlay at background - accept parameters from 1-10
       data-parallax: turn on parallax of the background
       data-bg-contain: change background-size to cointain

       The section must contain class background-image-holder with style="background-image: url('');" inline css

       For example:
       <div data-overlay="8" data-parallax data-bg-contain">
           <section class="section-X background-image-holder" style="background-image: url('assets/img/section-11/bg.jpg');"></div>
       </div>

       You can add class = "inverse" to change the background of overlay


       For example:
       <div data-overlay="8" data-parallax data-bg-contain" class="inverse"></div>

       ##################################################################
       -->
    <?php include('template_settings_options.php'); ?>

</head>

<body class="<?php print helper_body_classes(); ?> <?php print $member_navigation_style . ' ' . $sticky_navigation . ' ' . $titles_inverse . ' ' . $buttons_style; ?> ">
<module type="template_settings" id="mw-template-qtheme"/>

<div class="main">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <module type="logo" class="navbar-brand" id="header-logo"/>
            <button class="navbar-toggler" type="button" data - toggle="collapse" data - target="#navbarColor01" aria - controls="navbarColor01" aria - expanded="false" aria - label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <!--   <ul class="navbar-nav mr-auto">
                       <li class="nav-item active">
                           <a class="nav-link" href="#"> Home <span class="sr-only"> (current)</span></a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="#"> Features</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="#"> Pricing</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="#"> About</a>
                       </li>
                   </ul>-->

                <module type="menu" id="header-menu" template="navbar"/>

                <form class="form-inline my-2 my-lg-0" action="<?php print site_url(); ?>search" method="get">
                    <input type="search" placeholder="Search..." id="keywords" name="keywords" class="form-control mr-sm-2"/>

                    <button type="submit" class="btn btn-secondary my-2 my-sm-0"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>
    </div>