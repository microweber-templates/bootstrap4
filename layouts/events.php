<?php

/*

type: layout
content_type: dynamic
name: Events
position: 3
description: Events

*/


?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit" rel="content" field="bootstrap4_content">
        <module type="calendar" template="events_list"/>
        <module type="layouts" template="skin-3"/>
        <module type="layouts" template="skin-18"/>
    </div>

<?php include template_dir() . "footer.php"; ?>