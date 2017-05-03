<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>{content_meta_title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="{content_meta_title}">
    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">
    <meta property="og:type" content="{og_type}">
    <meta property="og:url" content="{content_url}">
    <meta property="og:image" content="{content_image}">
    <meta property="og:description" content="{og_description}">
    <meta property="og:site_name" content="{og_site_name}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php $theme_css_file = get_option("bootswatch_theme_css_file", "bootswatch_theme"); ?>
    <?php if ($theme_css_file == ''): ?>
        <link rel="stylesheet" id="bootstrap_theme" href="<?php print template_url() ?>css/default.css" type="text/css" media="all">
    <?php else: ?>
        <link rel="stylesheet" id="bootstrap_theme" href="<?php print $theme_css_file; ?>" type="text/css" media="all">
    <?php endif; ?>
    <link rel="stylesheet" href="{TEMPLATE_URL}css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="{TEMPLATE_URL}js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{TEMPLATE_URL}js/default.js"></script>
    <script>
        mw.lib.require('font_awesome');
    </script>
</head>
<body>
<div role="navigation" class="navbar navbar-default navbar-static" id="menu">
    <div class="container">
        <div class="edit" field="boostrap3-template-navbar-brand" rel="global">
            <div class="mw-row">
                <div class="mw-col" style="width: 20%">
                    <div class="mw-col-container">
                        <module type="logo" id="logo_header" default-text="Bootstrap" class="navbar-header"/>
                    </div>
                </div>
                <div class="mw-col" style="width: 80%">
                    <div class="mw-col-container">
                        <module type="menu" name="header_menu" id="main-navigation" template="navbar"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
