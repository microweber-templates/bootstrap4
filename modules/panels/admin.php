
<?php 

$color = get_option('color', $params['id']);
$icon = get_option('icon', $params['id']);

?>
<script>mw.lib.require('bootstrap3');</script>
<div class="mw-row tab mw-ui-box mw-ui-box-content">
    <label> Choose color:  </label>
    <select name="color" class="mw-ui-field mw-ui-field-medium mw_option_field">

        <option value="default-dark">Default Dark</option>
        <option value="light">Default Light</option>
        <option value="grey">Grey</option>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="turquoise ">Turquoise</option>
        <option value="green">Green</option>
        <option value="orange">Orange </option>
        <option value="yellow">Yellow  </option>
        <option value="dark">Dark</option>
        <option value="purple">Purple</option>
        <option value="aqua">Aqua</option>
        <option value="brown">Brown</option>
        <option value="dark-blue">Dark Blue</option>
        <option value="light-green">Light Green</option>
        <option value="info">Info</option>
        <option value="warning">Warning</option>
        <option value="danger">Danger</option>
        <option value="success">Success</option>
    </select>
</div>