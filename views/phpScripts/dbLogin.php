<?php 
	$dsn = 'mysql:host=localhost; dbname=cinema_ebooking';
	$username='root';
	$password='';
	
	try {
		$db= new PDO($dsn,$username,$password);
	} catch(PDOException $e) {
		$error=$e->getMessage();
		echo $error_message;
		exit();
	}
?>