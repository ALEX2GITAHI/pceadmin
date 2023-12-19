<?php
	$connection = mysqli_connect('localhost', 'root', '', 'mukinyi');

	if (!$connection)
	{
		die("Database Connection Failed" . mysql_error());
	}

?>