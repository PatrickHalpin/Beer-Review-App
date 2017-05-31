<?php
$names=array();
$types=array();
$ids=array();

$usersList=array();

$id=$_COOKIE['userId'];

$drinks=array();
$drinksName=array();

$dbh = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');
$query="SELECT * FROM drinks";

$data = $dbh->query($query);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $output) 
{
	array_push($ids, $output['id']);
	array_push($names,$output['name']);	
	array_push($types,$output['type']);	
	$arrL=count($names);
}

$dbh2 = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');
$query="SELECT did FROM drinksRel WHERE uid='$id' ";

$data = $dbh2->query($query);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $output) 
{
	array_push($usersList, $output['did']);
	$usersListCount=count($usersList);
}

?>