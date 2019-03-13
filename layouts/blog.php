<?php

/*

type: layout
content_type: dynamic
name: Blog 1 - 3 per row
position: 3
description: Blog

*/


?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit" rel="content" field="bootstrap4_content">
        <module type="layouts" template="skin-3"/>
        <module type="layouts" template="skin-18"/>
    </div>

<?php include template_dir() . "footer.php"; ?>