<?php

$userRating=0;
$uid=$_COOKIE['userId'];
$id = $_GET['id'];
$drinkName;
$reviews=array();
$arrL=0;

$dbh = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');
$query="SELECT * FROM drinks WHERE id = '$id' ";
$data = $dbh->query($query);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $output) 
{
	$drinkName = $output['name'];
}

$dbh2 = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');
$query="SELECT * FROM reviews WHERE did = '$id' ";
$data = $dbh2->query($query);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $output) 
{
	array_push($reviews,$output['review']);
	$arrL=count($reviews);
}

$dbh3 = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');
$query="SELECT * FROM reviews WHERE did = '$id' AND uid='$uid' ";
$data = $dbh3->query($query);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $output) 
{
	$userRating=$output['rating'];
}



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$rev=$_POST["review"];
	setData($rev,$id,$uid);
}

function setData($rev,$id,$uid)
{
		$conn2 = new PDO("mysql:host=localhost:8889;dbname=Beer", 'patrick', 'password');

	    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql= "INSERT INTO reviews (did,uid,review) VALUES ('$id','$uid','$rev') ON DUPLICATE KEY UPDATE review='$rev' ";
	    $conn2->exec($sql);
	    echo "<meta http-equiv='refresh' content='0'>";

}











?>