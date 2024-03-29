<?php
// connecting to database usinf credentials from connect.php
$config = require_once 'connect.php';

try {
	
	$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
		PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);
	
} catch (PDOException $e) {
	
	echo $e->getMessage();
	exit('Database error!');
	
}
?>