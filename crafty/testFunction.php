<?php 
$id;
$uid=$_COOKIE['userId'];
$name;
$type;
if($_POST['action'] == 'like') 
{
		$id=$_POST['id'];
		$dbh2 = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');
		$query="SELECT * FROM drinks WHERE id='$id' ";

		$data = $dbh2->query($query);
		$result = $data->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $output) 
		{
			$name=$output['name'];
			$type=$output['type'];

		}

		$conn2 = new PDO("mysql:host=localhost:8889;dbname=Beer", 'patrick', 'password');

	    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    // $sql = " UPDATE drinksRel SET name = '$name', type ='$type' WHERE did = '$id' ";
	    $sql= "INSERT INTO drinksRel (uid,did,name,type) VALUES ('$uid','$id','$name','$type')";
	    $conn2->exec($sql);
}

if($_POST['action'] == 'remove') 
{
		$id=$_POST['id'];

		$conn3 = new PDO("mysql:host=localhost:8889;dbname=Beer", 'patrick', 'password');

	    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql= "DELETE FROM drinksRel WHERE did='$id' AND uid='$uid' ";
	    
	    $conn3->exec($sql);
}







?>