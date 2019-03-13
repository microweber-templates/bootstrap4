<?php include template_dir() . "header.php"; ?>
    <div class="blog-inner-page" id="blog-content-<?php print CONTENT_ID; ?>">
        <?php $post = get_content_by_id(CONTENT_ID); ?>

        <section class="p-t-100 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h1><?php print content_title(); ?></h1>

                            <div class="edit safe-mode" field="post_share_1" rel="inherit">
                                <div class="element">
                                    <div class="m-t-40">
                                        <module type="sharer" id="post-top-sharer"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-t-0 p-b-50">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <module type="pictures" rel="content" template="skin-3" id="blog-post-pictures"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-t-100 p-b-00">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="description edit dropcap" field="content" rel="content">
                            <div class="element">
                                <p align="justify"><?php print _e("This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative, Make Web."); ?></p>
                            </div>
                        </div>

                        <div class="edit safe-mode" field="post_share_2" rel="inherit">
                            <div class="element">
                                <div class="m-t-40 nodrop">
                                    <div class="share-label text-center"><?php print _lang('Share this article', 'templates/qtheme'); ?></div>

                                    <module type="sharer" template="skin-1" id="post-bottom-sharer"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <module type="comments" data-content-id="<?php print CONTENT_ID; ?>"/>

        <div class="edit safe-mode" field="post_related" rel="inherit">
            <div class="element">
                <section class="section p-t-100 p-b-50 nodrop">
                    <div class="container">
                        <div class="text-center m-b-50">
                            <h1 class="bold"><?php print _e("Related articles"); ?></h1>
                        </div>

                        <module type="posts" limit="3" hide_paging="true"/>
                    </div>
                </section>
            </div>
        </div>
    </div>

<?php include template_dir() . "footer.php"; ?>