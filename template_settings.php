<?php include('template_settings_options.php'); ?>

<?php


 ?>











<div id="settings-holder">
    <div class="col-xs-12">
        <h5 style="font-weight: bold;"><?php _lang("Website Settings", "templates/qtheme"); ?></h5>
    </div>

    <script>mw.lib.require('bootstrap3ns');</script>
    <style>

        #color-scheme {
            display: none;
        }

        .theme-color-selector button {
            border: 1px solid transparent;
            width: 30px;
            height: 30px;
            background: #425cbb;
            margin: 3px;
            outline: none !important;
        }

        .theme-color-selector button.active {
            border: 1px solid #0a0a0a;
        }

        .theme-color-selector button[data-color="blue"] {
            background: #428fbb;
        }

        .theme-color-selector button[data-color="brightgreen"] {
            background: #42bb59;
        }

        .theme-color-selector button[data-color="darkorange"] {
            background: #bb8c42;
        }

        .theme-color-selector button[data-color="darkred"] {
            background: #bb5042;
        }

        .theme-color-selector button[data-color="deepred"] {
            background: #bb4242;
        }

        .theme-color-selector button[data-color="green"] {
            background: #54c39d;
        }

        .theme-color-selector button[data-color="mediumblue"] {
            background: #54bcc3;
        }

        .theme-color-selector button[data-color="olivegreen"] {
            background: #92bb42;
        }

        .theme-color-selector button[data-color="pink"] {
            background: #bb426d;
        }

        .theme-color-selector button[data-color="purple"] {
            background: #bc54c3;
        }

        .theme-color-selector button[data-color="orounda-blue"] {
            background: #0086ed;
        }
    </style>

    <script>
        $(document).ready(function () {
            $('#color-scheme').on('change', function () {
                var color = $(this).val();

                if (color == '') {
                    color = '<?php print template_url(); ?>assets/css/theme.css';
                } else {
                    color = '<?php print template_url(); ?>assets/css/color-' + color + '.css';
                }

                top.$('#theme-color').attr('href', color);
            });

            $('.theme-color-selector button').on('click', function () {
                var choosedColor = $(this).data('color');
                //console.log($('#color-scheme option[data-color="' + choosedColor + ']"'));

                $('#color-scheme option').prop('selected', false);
                $('#color-scheme option[value="' + choosedColor + '"]').prop('selected', true);
                $('#color-scheme').change();

                $('.theme-color-selector button').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

    <div class="bootstrap3ns">
        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Sticky Navigation</label>
            <div class="col-lg-10">
                <select name="sticky_navigation" id="sticky_navigation" class="mw_option_field form-control" data-option-group="mw-template-qtheme">
                    <option value="" <?php if ($sticky_navigation == '') {
                        echo 'selected';
                    } ?>>Normal
                    </option>
                    <option value="sticky-nav"<?php if ($sticky_navigation == 'sticky-nav') {
                        echo 'selected';
                    } ?>>Sticky
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Member Navigation Style</label>
            <div class="col-lg-10">
                <select name="member_navigation_style" id="member_navigation_style" class="mw_option_field form-control" data-option-group="mw-template-qtheme">
                    <option value="" <?php if ($member_navigation_style == '') {
                        echo 'selected';
                    } ?>>Normal
                    </option>
                    <option value="member-nav-inverse"<?php if ($member_navigation_style == 'member-nav-inverse') {
                        echo 'selected';
                    } ?>>Inverse
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Titles in Black</label>
            <div class="col-lg-10">
                <select name="titles_inverse" id="titles_inverse" class="mw_option_field form-control" data-option-group="mw-template-qtheme">
                    <option value="" <?php if ($titles_inverse == '') {
                        echo 'selected';
                    } ?>>Normal
                    </option>
                    <option value="titles-inverse"<?php if ($titles_inverse == 'titles-inverse') {
                        echo 'selected';
                    } ?>>In Black
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Buttons Style</label>
            <div class="col-lg-10">
                <select name="buttons_style" id="buttons_style" class="mw_option_field form-control" data-option-group="mw-template-qtheme">
                    <option value="" <?php if ($buttons_style == '') {
                        echo 'selected';
                    } ?>>Normal
                    </option>
                    <option value="rounded-buttons"<?php if ($buttons_style == 'rounded-buttons') {
                        echo 'selected';
                    } ?>>Rounded
                    </option>
                    <option value="squared-buttons"<?php if ($buttons_style == 'squared-buttons') {
                        echo 'selected';
                    } ?>>Squared
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="mw_option_field" id="shopping_cart" name="shopping_cart" data-option-group="mw-template-qtheme" value="true" <?php if ($shopping_cart == 'true') {
                            echo 'checked';
                        } ?> /> <?php _lang("Show shopping cart in header", "templates/qtheme"); ?>
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="mw_option_field" id="profile_link" name="profile_link" data-option-group="mw-template-qtheme" value="true" <?php if ($profile_link == 'true') {
                            echo 'checked';
                        } ?> /> Show Profile link in header
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="mw_option_field" id="footer" name="footer" data-option-group="mw-template-qtheme" value="true" <?php if ($footer == 'true') {
                            echo 'checked';
                        } ?> /> <?php _lang("Turn off Footer for website", "templates/qtheme"); ?>
                    </label>
                </div>
            </div>
        </div>

        <module type="template_settings/admin"/>


    </div>
</div>
<!-- /#settings-holder -->