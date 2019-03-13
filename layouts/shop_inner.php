<?php include template_dir() . "header.php"; ?>

    <div class="shop-inner-page" id="shop-content-<?php print CONTENT_ID; ?>">
        <section class="p-t-100 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <module type="pictures" rel="content" template="skin-6"/>
                    </div>

                    <div class="col-md-6">
                        <div class="heading">
                            <h1 class="edit" field="title" rel="content"><?php print content_title(); ?></h1>

                            <div class="edit safe-mode" field="post_share_1" rel="inherit">
                                <div class="element">
                                    <div class="m-t-40">
                                        <module type="sharer" id="product-top-sharer"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="description">
                            <div class="edit" field="short_description" rel="content">
                                <p>
                                    <?php _lang("Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen
                                            disruptive
                                            graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure
                                            validation android release success.", "templates/qtheme"); ?>
                                </p>
                            </div>

                            <form>
                                <div class="row">
                                    <?php $content_data = content_data(CONTENT_ID);
                                    $in_stock = true;
                                    if (isset($content_data['qty']) and $content_data['qty'] != 'nolimit' and intval($content_data['qty']) == 0) {
                                        $in_stock = false;
                                    }
                                    ?>

                                    <?php if ($in_stock == true): ?>
                                        <div class="col-sm-6 field-holder">
                                            <label><span class="text-success"><i class="fa fa-check"></i> <?php _e("In Stock") ?></span></label>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-sm-6 field-holder">
                                            <label><span class="text-danger"><i class="glyphicon glyphicon-remove"></i> <?php _e("Out of Stock") ?></span></label>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (isset($content_data['sku'])): ?>
                                        <div class="col-sm-6 field-holder">
                                            <label for="sku"><?php _e("SKU Number") ?> #<?php print $content_data['sku']; ?></label>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <module type="shop/cart_add"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="p-t-100 p-b-50">
            <div class="container">
                <div class="tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs as-buttons" role="tablist">
                        <li role="presentation" class="active"><a href="#product-information" aria-controls="product-information" role="tab" data-toggle="tab"><i class="material-icons">info</i>
                                Product Information</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab"><i class="material-icons">rate_review</i> Reviews</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="product-information">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center m-b-50">
                                        <h1 class="bold">Information and Specifications</h1>
                                    </div>

                                    <div class="description">
                                        <div class="edit" field="content_body" rel="content">
                                            <p>
                                                <?php _lang("Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen
                                            disruptive
                                            graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure
                                            validation android release success.", "templates/qtheme"); ?>
                                            </p>
                                        </div>

                                        <div class="edit" field="product_sheets" rel="content">
                                            <div class="table-responsive element">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th><?php _lang("Size", "templates/qtheme"); ?></th>
                                                        <th><?php _lang("Chest", "templates/qtheme"); ?></th>
                                                        <th><?php _lang("Waist", "templates/qtheme"); ?></th>
                                                        <th><?php _lang("Exchange rate", "templates/qtheme"); ?></th>
                                                        <th><?php _lang("A cup", "templates/qtheme"); ?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>S</td>
                                                        <td>96 - 100</td>
                                                        <td>70 - 80</td>
                                                        <td>100 - 105</td>
                                                        <td>B - C</td>
                                                    </tr>
                                                    <tr>
                                                        <td>M</td>
                                                        <td>100 - 100</td>
                                                        <td>90 - 100</td>
                                                        <td>105 - 110</td>
                                                        <td>B - D</td>
                                                    </tr>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>96 - 100</td>
                                                        <td>90 - 99</td>
                                                        <td>110 - 125</td>
                                                        <td>D - E</td>
                                                    </tr>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>120 - 100</td>
                                                        <td>110 - 100</td>
                                                        <td>125 - 130</td>
                                                        <td>D - E</td>
                                                    </tr>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="reviews">
                            <module type="comments" template="skin-1"/>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="section p-b-50">
            <div class="container">
                <div class="text-center m-b-50">
                    <h1 class="bold"><?php _e('Related Products'); ?></h1>
                </div>
                <module type="shop/products" related="true" limit="3"/>
            </div>
        </section>
    </div>


<?php include template_dir() . "footer.php"; ?>