<?php
$continue=true;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{	

  if( $_POST["pass"]!= $_POST["pass2"] )
  {
    $continue=false;
    echo "Please ensure passwords match";
  }

	if (empty($_POST["email"]))
  {
    echo (" Email is required.");
    $continue=false;
    
  } 
  else
  {
  	$email = $_POST["email"];
  }
  if (empty($_POST["name"]))
  {
    echo(" Name is required.");
   $continue=false;
  } 
  else
  {
  	$name = $_POST["name"];
  }

if (empty($_POST["pass"]))
  {
    echo(" Password is required.");
    $continue=false;
  } 
  else
  {
  	$pass = $_POST["pass"];
    $pass=md5($pass);
  }
 
  if($continue==true)
  {
	   reg($name,$pass,$email);
  }

  

}

function reg($name,$pass,$email)
{
    $dbh = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');
    $query="SELECT name FROM users";
    $statement=$dbh->prepare($query);
    $statement->execute(array(':name'=> $name));

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $output) 
    {
      $res1 =$output["name"];
      if($res1==$name)
      {
        echo "Name exists please choose another";
      }
      else
      {
        $conn = new PDO("mysql:host=localhost:8889;dbname=Beer", 'patrick', 'password');
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "INSERT INTO users (id, name ,email, pass)
          VALUES ('EMPTY', '$name' ,'$email','$pass')";
          $conn->exec($sql);
          echo '<script type="text/javascript"> document.location = "login.php";</script>';
      }

    }
}
$conn = null;
?>