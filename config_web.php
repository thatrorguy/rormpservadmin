<?php

	// CONFIG
	
	// The web admin password
	define('PASSWORD', 'secret');
	
	// The password of the daemon on the remote server (This has to be exactly 40 characters).
	// This has to match the password in your daemon config file.
	define('DAEMON_URI', 'http://user:password@localhost:12999');

	// Error reporting?
	error_reporting(0);
	
?>
