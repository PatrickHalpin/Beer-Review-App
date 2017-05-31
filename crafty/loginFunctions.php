<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	$pass=md5($pass);
	getData($name,$pass);

}

function getData($name,$pass)
{
$res1;
$res2;
$res3;

try
	{
		
		$dbh = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');

		$query="SELECT * FROM users WHERE name= :name";
		$statement=$dbh->prepare($query);
		$statement->execute(array(':name'=> $name));

		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $output) 
		{
			$res1 =$output["name"];
			$res2 =$output["id"];
			$res3 =$output["pass"];
			if($res1==$name && $res3==$pass)
			{
				setcookie("username", $res1, time()+120000);
				setcookie("userId", $res2, time()+120000);
				echo '<script type="text/javascript"> document.location = "index.php";</script>';

			}
			else
			{
				echo "Wrong Username or Password";
			}

		}


	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
	}
}