<?php

$did;
$id=$_COOKIE['userId'];

if($_POST['action'] == 'like') 
{
		$did=$_POST['drinkId'];
		$value=$_POST['value'];
		$conn2 = new PDO("mysql:host=localhost:8889;dbname=Beer", 'patrick', 'password');

	    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql= "INSERT INTO reviews (did,uid,rating) VALUES ('$did','$id','$value') ON DUPLICATE KEY UPDATE rating='$value' ";
	    $conn2->exec($sql);

	
}






?>