<?php

/*

type: layout

name: Skin 1

description: Skin 1 comments template

*/

?>


<?php $rand = rand(); ?>

<div class="comments">
    <?php if (is_array($comments)): ?>

        <div class="row">
            <div class="col-md-12">
                <div class="text-center m-b-50">
                    <h1 class="bold">Customer Reviews</h1>
                </div>

                <div id="comments-list-<?php print $data['id'] ?>">
                    <?php foreach ($comments as $comment) : ?>
                        <?php
                        $required_moderation = get_option('require_moderation', 'comments') == 'y';
                        if (!$required_moderation or $comment['is_moderated'] == 1 or (!(mw()->user_manager->session_all() == false) and $comment['session_id'] == mw()->user_manager->session_id())) {
                            ?>
                            <?php
                            $avatars_enabled = get_option('avatar_enabled', 'comments') == 'y';
                            $comment_author = get_user_by_id($comment['created_by']);
                            $my_comment = false;
                            if ($cur_user != false and $comment['created_by'] == $cur_user) {
                                $my_comment = true;
                            }

                            if (isset($comment['comment_website'])) {
                                $website_url = mw('format')->prep_url($comment['comment_website']);
                            } else {
                                $website_url = 'javascript:;';
                            }
                            ?>
                            <?php event_trigger('module.comments.item.before', $comment); ?>

                            <div class="comment-holder" id="comment-<?php print $comment['id'] ?>">
                                <div class="author"><span><a href="<?php print $website_url; ?>"><?php print $comment['comment_name'] ?></a> <?php print _e('says'); ?>:</span></div>
                                <?php if (isset($comment['updated_at'])): ?>
                                    <div class="date"><span><?php print date('M d, Y', strtotime($comment['updated_at'])); ?></span></div>
                                <?php endif; ?>

                                <div class="description">
                                    <?php if ($required_moderation != false and $comment['is_moderated'] == 0): ?>
                                        <em class="comment-require-moderation">
                                            <?php _e("Your comment requires moderation"); ?>
                                        </em><br/>
                                    <?php endif; ?>

                                    <p><?php print nl2br($comment['comment_body'], 1); ?></p>
                                </div>
                            </div>
                            <?php event_trigger('module.comments.item.body.after', $comment); ?>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>

                <?php if ($paging != false and intval($paging) > 1 and isset($paging_param)): ?>
                    <?php print paging("num={$paging}&paging_param={$paging_param}") ?>
                <?php endif; ?>
            </div>
        </div>

    <?php else: ?>

        <div class="row m-t-50">
            <div class="col-md-12">
                <div class="text-center m-b-50">
                    <h1 class="bold">      <?php _e("No comments"); ?></h1>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <script>
        $(document).ready(function () {
            $('.js-show-review-form').on('click', function () {
                $(this).hide();
                $('.js-review-form').slideDown();
            });
        });
    </script>

    <div class="text-center">
        <button class="js-show-review-form btn btn-primary btn-lg"><i class="material-icons">rate_review</i> Leave a Review</button>
    </div>


    <?php if ($are_disabled == false) : ?>
        <?php if (!$login_required or $cur_user != false): ?>
            <div class="js-review-form" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center m-b-50">
                            <h1 class="bold"><?php _e("Leave a comment"); ?></h1>
                        </div>
                    </div>
                </div>


                <div class="leave-message-holder">
                    <form autocomplete="on" id="comments-form-<?php print $data['id'] ?>">
                        <?php event_trigger('module.comments.form.start', $data); ?>
                        <input type="hidden" name="rel_id" value="<?php print $data['rel_id'] ?>">
                        <?php print csrf_form(); ?>
                        <input type="hidden" name="rel" value="<?php print $data['rel_type'] ?>">
                        <input type="hidden" name="module_id" value="<?php print $params['id'] ?>">
                        <?php if ($form_title != false): ?>
                            <input type="hidden" name="comment_subject" value="<?php print $form_title ?>">
                        <?php endif; ?>


                        <?php if ($cur_user == false) : ?>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Name" name="comment_name">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="E-mail" name="comment_email">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" id="website" type="text" placeholder="Website" name="comment_website">
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="comments-user-profile col-xs-12" style="margin-bottom: 5px;">
                                <?php _e("You are commenting as"); ?>:
                                <span class="comments-user-profile-username"> <?php print user_name($cur_user_data['id']); ?> </span>
                                <a href="<?php print api_link('logout') ?>" class="btn btn-primary btn-xs pull-right"><?php _e("Logout"); ?></a>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Type your comment" name="comment_body" style="min-height: 200px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php if (!$disable_captcha) { ?>
                                <div class="col-xs-12 col-sm-5">
                                    <module type="captcha"/>
                                </div>
                            <?php } ?>

                            <div class="col-xs-12 col-sm-7 text-right">
                                <button type="submit" class="btn btn-default btn-lg m-t-15"><?php _e("Add comment"); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php else : ?>
            <div class="alert">
                <?php _e("You have to"); ?>
                <a href='<?php print login_url(); ?>' class="comments-login-link">
                    <?php _e("log in"); ?>
                </a>
                <?php _e("or"); ?>
                <a class="comments-register-link" href='<?php print register_url(); ?>'>
                    <?php _e("register"); ?>
                </a>
                <?php _e("to post a comment"); ?>
                .
            </div>
        <?php endif; ?>
    <?php endif; ?>

</div>