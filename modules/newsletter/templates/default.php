<?php

/*

type: layout

name: Default

description: Default

*/
?>


<form method="post" class="newsletter-holder" id="newsletters-form-<?php print $params['id'] ?>">
    <?php print csrf_form(); ?>
    <input type="text" name="email" id="email" placeholder="<?php _lang("Enter your email", "templates/qtheme"); ?>">
    <button type="submit"><?php _lang("subscribe", "templates/qtheme"); ?></button>
    <div class="clearfix"></div>
</form>
