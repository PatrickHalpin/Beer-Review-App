<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$con=true;
	$name=$_POST["drinkName"];
	if(strlen($name)>15)
	{
		$con=false;
		echo "Only a maximum of 15 letters allowed for a drink name";
	}
	$type=$_POST["drinkType"];
	if(strlen($type)>15)
	{
		$con=false;
		echo "Only a maximum of 15 letters allowed for a drink type";
	}
		if($con==true)
		{
			addDrink($name,$type);
		}
}

function addDrink($name,$type)
{
		$conn = new PDO("mysql:host=localhost:8889;dbname=Beer", 'patrick', 'password');

	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO drinks (id, name ,type)
	    VALUES ('EMPTY', '$name' ,'$type' )";
	    $conn->exec($sql);
	    $last_id = $conn->lastInsertId();
	    setcookie("lastDrinkId", $last_id, time()+120000);
	    echo '<script type="text/javascript"> document.location = "addimage.php";</script>';


}





?>