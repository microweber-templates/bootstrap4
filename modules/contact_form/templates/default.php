<?php

/*

type: layout

name: Default

description: Default

*/

?>

<section class="section-silver p-t-50 p-b-50">
    <div class="container">
        <div class="text-center m-b-50">
            <div class=" edit" rel="module" field="module-<?php print $params['id'] ?>">
                <h1 class="bold"><?php _lang("Leave a message", "templates/qtheme"); ?></h1>
            </div>

            <div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><?php _lang("Thank You", "templates/qtheme"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/qtheme"); ?>!
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="leave-message-holder">
            <form class="form-horizontal" id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
                <?php print csrf_form() ?>
                <input type="hidden" name="for" value="contact_form"/>
                <input type="hidden" name="for_id" value="contact_form"/>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <input class="form-control" id="email" name="email" type="email" placeholder="E-mail">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <input class="form-control" id="phone" name="phone" type="text" placeholder="Phone">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Type your comment" style="min-height: 200px;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <?php if (get_option('disable_captcha', $params['id']) != 'y'): ?>
                            <module type="captcha" template="default"/>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-7 text-right">
                        <button type="submit" class="btn btn-default btn-lg m-t-15">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
