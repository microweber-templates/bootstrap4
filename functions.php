<?php

api_expose('theme_colors_palette_css');

function theme_colors_palette_css($params=false){
    return include __DIR__.DS.'styles.php';

}