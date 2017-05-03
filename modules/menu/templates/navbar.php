<?php

/*

type: layout

name: Navbar

description: Navigation bar

*/

?>
<script>

$(document).ready(function() {
 	$('ul.nav .dropdown').hover(function() {
	  $(this).find('.dropdown-menu:first',this).stop(true, true).delay(200).fadeIn();
	}, function() {
	  $(this).find('.dropdown-menu:first',this).stop(true, true).delay(200).fadeOut();
	}); 
});

</script>

<div class="xnavbar-collapse xcollapse">
  <?php
$menu_filter['ul_class'] = 'nav navbar-nav';
   $menu_filter['ul_class_deep'] = 'dropdown-menu';
 $menu_filter['li_class'] = 'dropdown';

 
		$mt =  menu_tree($menu_filter);

		if($mt != false){
		    print ($mt);
		} else {
		    print lnotif("There are no items in the menu <b>".$params['menu-name']. '</b>');
		}
   		?>
</div>
