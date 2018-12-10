<?php
	$server = 'localhost';
	$username = 'root';
	$pwd = '';
	$dbname = 'test';
	$mysqli_test = new mysqli($server,$username,$pwd,$dbname);
	if ($mysqli_test -> connect_error)
	{
		die("Connect mysql failed" . $mysqli_test -> connect_error);
	}
	$mysqli_test -> query("SET NAMES utf8");

/*
	$mysqli_test = mysqli_connect($server,$username,$pwd,$dbname);
	mysqli_query("set character set utf8",$link);
	$mysqli = new mysqli("localhost", "pma", "", "test");
	mysqli_select_db   ($link , $dbname);
*/	
?>