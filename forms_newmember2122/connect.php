<meta http-equiv="Content-Type"content="text/html" charset="utf-8">
<?php

	// host
	$db_server = "localhost";

	// username
	$db_user = "";
	// $HostUser = "root";

	// phpmyadmin password
	$db_passwd = "";
	// $HostPass = "";

	// database name
	$db_name = "";
	// $DatabaseName = "fyp";

	// Create connection
	$db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);

	// Change character set to utf8
	mysqli_set_charset($conn,"utf8");

	// choose DB
	if (!@mysqli_select_db($db, $db_name)) {
		die("Unable to use this database");
	}

?>