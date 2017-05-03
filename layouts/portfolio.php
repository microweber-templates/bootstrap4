<?php

/*

type: layout
content_type: dynamic
name: Portfolio
position: 30
description: Portfolio

*/


?>
<?php include template_dir(). "header.php"; ?>

<div class="container" id="portfolio-holder-container">
  <div class="edit"  field="content_header_text" rel="content">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Page Heading <small>Secondary Text</small> </h1>
      </div>
    </div>
  </div>
  <div class="edit"  field="content" rel="content">
    <module type="posts"  template="portfolio" />
  </div>
</div>
<?php include template_dir(). "footer.php"; ?>
