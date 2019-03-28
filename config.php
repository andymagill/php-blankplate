<?php

	define( 'SITE_HOME', "http://".$_SERVER['HTTP_HOST']."/" );
	define( 'COUNTRY_CODE', "en-US" );
	define( 'SITE_NAME', "Site Name" );
	define( 'COPYRIGHT', "Copyright &copy; ".SITE_NAME.". All rights reserved. " );

	// debug helper
	if (isset($_GET['debug'])) {
		define( 'DEBUG', true );
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}

 ?>
