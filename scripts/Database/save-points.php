<?php
session_start();
	$origin_address= " ";
	$destination_address= " ";
	$origin_address = $_POST['origin_address'];
	$destination_address = $_POST['destination_address'];
	echo $origin_address;
	echo $destination_address;
	$_SESSION['destination'] = $destination_address;
	$_SESSION['origin'] = $origin_address;

?>