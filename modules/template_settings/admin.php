<?php
$theme_color_1 = get_option('theme-color-1', 'mw-template-qtheme');
if ($theme_color_1 == '') {
    $theme_color_1 = '';
}

$theme_color_2 = get_option('theme-color-2', 'mw-template-qtheme');
if ($theme_color_2 == '') {
    $theme_color_2 = '';
}

$theme_color_3 = get_option('theme-color-3', 'mw-template-qtheme');
if ($theme_color_3 == '') {
    $theme_color_3 = '';
}

$theme_color_4 = get_option('theme-color-4', 'mw-template-qtheme');
if ($theme_color_4 == '') {
    $theme_color_4 = '';
}

$theme_color_5 = get_option('theme-color-5', 'mw-template-qtheme');
if ($theme_color_5 == '') {
    $theme_color_5 = '';
}
?>
<script>

    $(document).ready(function () {
        mw.colorPicker({
            element: '#theme-color-1',
            position: 'bottom-left',
            onchange: function (color) {
                // alert(color);
                $('#theme-color-1').trigger('change');
            }
        });

        mw.colorPicker({
            element: '#theme-color-2',
            position: 'bottom-left',
            onchange: function (color) {
                // alert(color);
                $('#theme-color-2').trigger('change');
            }
        });

        mw.colorPicker({
            element: '#theme-color-3',
            position: 'bottom-left',
            onchange: function (color) {
                // alert(color);
                $('#theme-color-3').trigger('change');
            }
        });

        mw.colorPicker({
            element: '#theme-color-4',
            position: 'bottom-left',
            onchange: function (color) {
                // alert(color);
                $('#theme-color-4').trigger('change');
            }
        });

        mw.colorPicker({
            element: '#theme-color-5',
            position: 'bottom-left',
            onchange: function (color) {
                // alert(color);
                $('#theme-color-5').trigger('change');
            }
        });

    });

</script>
<br/>

<hr/>
<div class="form-group">
    <label for="theme-color-1" class="col-lg-2 control-label">Main color 1:</label>
    <div class="col-lg-10">
        <input id="theme-color-1" class="form-control mw_option_field mw-color-picker" data-also-reload="template_settings" name="theme-color-1" data-option-group="mw-template-qtheme" value="<?php print $theme_color_1; ?>"/>
    </div>
</div>

<div class="form-group">
    <label for="theme-color-2" class="col-lg-2 control-label">Main color 2:</label>
    <div class="col-lg-10">
        <input id="theme-color-2" class="form-control mw_option_field mw-color-picker" data-also-reload="template_settings" name="theme-color-2" data-option-group="mw-template-qtheme" value="<?php print $theme_color_2; ?>"/>
    </div>
</div>

<div class="form-group">
    <label for="theme-color-3" class="col-lg-2 control-label">Some buttons and Hovers:</label>
    <div class="col-lg-10">
        <input id="theme-color-3" class="form-control mw_option_field mw-color-picker" data-also-reload="template_settings" name="theme-color-3" data-option-group="mw-template-qtheme" value="<?php print $theme_color_3; ?>"/>
    </div>
</div>

<div class="form-group">
    <label for="theme-color-4" class="col-lg-2 control-label">White Text and Some backgrounds:</label>
    <div class="col-lg-10">
        <input id="theme-color-4" class="form-control mw_option_field mw-color-picker" data-also-reload="template_settings" name="theme-color-4" data-option-group="mw-template-qtheme" value="<?php print $theme_color_4; ?>"/>
    </div>
</div>

<div class="form-group">
    <label for="theme-color-5" class="col-lg-2 control-label">Black Text:</label>
    <div class="col-lg-10">
        <input id="theme-color-5" class="form-control mw_option_field mw-color-picker" data-also-reload="template_settings" name="theme-color-5" data-option-group="mw-template-qtheme" value="<?php print $theme_color_5; ?>"/>
    </div>
</div>