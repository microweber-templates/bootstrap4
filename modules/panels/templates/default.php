<?php
/*
type: layout
name: Panels
description: Panels
*/

?>
<?php $color = get_option('color', $params['id']);?>
<div class="panel panel-<?php print $color;?> edit" field="panel<?php print $params['id'];?>" rel="panel<?php print $params['id'];?>">
    <div class="panel-heading">
        <h3 class="panel-title">Default Panel</h3>
    </div>
    <div class="panel-body">
    <h4>Default Panel</h4>   
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
    </div>
</div>