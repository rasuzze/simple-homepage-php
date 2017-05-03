<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?> 

<?php
		
	if (array_key_exists('page', $_GET)){
		$page = $_GET['page'];
		
		if ($page == 'cv') {
			require ("cv.php");
		} 
			elseif ($page == 'about') {
			require ("about.php");
		} 
			elseif ($page == 'contacts') {
			require ("contacts.php");
	} else{
		require('404.php');
		
	} }
		else {
		require ("home.php");
	}
	
?>