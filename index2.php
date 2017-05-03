<?php
require('masyvas.php');
$word = false;
if (array_key_exists('page', $_GET)) {
	
	$page = $_GET['page'];

	foreach ($pages as $i => $value) :
		if ($page == $value['page']) {
		require ($value["template"]);
		$word = true;
		} 

	endforeach;
	}
	else {
		require($home["template"]);	
		$word = false;
}
if ($word == false) {
	require ($bad['template']);
}

?>