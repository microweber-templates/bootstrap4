<?php

/*

type: layout

name: CTA

description: Call to action

*/

?>

<div class="leave-message-holder">
    <div class="row">
        <div class="col-xs-12 allow-drop">
            <div class=" edit" rel="module" field="module-<?php print $params['id'] ?>">
                <h4><?php _lang("Request an access", "templates/qtheme"); ?></h4>
                <p>Please fill in the form below</p>
            </div>
        </div>
    </div>
    <div class="row">
        <form id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
            <div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><?php _lang("Thank You", "templates/qtheme"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/qtheme"); ?>!
            </div>

            <?php print csrf_form() ?>
            <input type="hidden" name="for" value="contact_form"/>
            <input type="hidden" name="for_id" value="contact_form"/>

            <div class="col-sm-12">
                <div class="form-group">
                    <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Name">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <input class="form-control" id="email" type="email" name="email" placeholder="E-mail">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <input class="form-control" id="website" name="website" type="text" placeholder="Website">
                </div>
            </div>

            <?php if (get_option('disable_captcha', $params['id']) != 'y'): ?>
                <div class="col-sm-12">
                    <module type="captcha" template="default"/>
                    <div class="clearfix"></div>
                    <br />
                </div>
            <?php endif; ?>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="styled-checkbox">I agreed with the terms and conditions
                        <input type="checkbox" name="terms" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

            <div class="col-sm-12 text-center m-t-10">
                <button class="btn btn-default btn-lg" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

