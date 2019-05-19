<?php
include("constants.php");

//1. Make connection 
// try catch 
$connection = new PDO(
	'mysql:host='.DB_HOST.
	'; dbname='.DB_NAME.';
 charset=UTF8', DB_USER, DB_PASS);
$connection->exec('set names utf8');
if( null !== $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION))
{
	// echo "Connection established!";
}else{
	echo "Connection refused!";
	die();
}


?>