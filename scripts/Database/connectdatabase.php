<?php
include_once 'config_database.php'; //Calling all the variables saved in this file
$connection = mysqli_connect('192.168.1.220', 'team3rocks', 'jeremytheboss');
if(!$connection) {
	die("Database connection failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'master');
if(!$select_db) {
	die("Database selection failed" . mysqli_error($select_db));
}
?>
