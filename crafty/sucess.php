<?php
if(!isset($_COOKIE['userId'])) 
{
  $url="login.php";
  header('Location: ' . $url, false, 302);
  exit;
}
$userId=$_COOKIE['userId'];
$lastDrinkId=$_COOKIE['lastDrinkId'];
include 'sucessFunctions.php';
$str="ups/".$lastDrinkId.".jpg";
if (!file_exists($str)) 
    {
      $str="images2/iconRed.png";
    }
include 'links.php';   
include 'head.php';
?>

<div class="container-fluid">
	<div class="row" id="bar">
		<div class="col-xs-12 col-md-12">
			<span id="ham" onclick="openNav()">
				 ☰
			</span>
		</div>
	</div>
</div>

<div class="container-fluid">
      <div class="row" id="spacer">
        <div class="col-xs-12 col-md-12">
        <span id="ham">
         ☰
        </span>
        </div>
      </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-4">
    </div>

    <div class="col-xs-12 col-md-4" id="login">
      <div class="logcard"> 
        <img class="img2" src= <?php echo $str ?> >
        <div id="logSub">
          <p>Name<p>
          <p>Type<p>
          <a href="index.php">
          <button class="cardBtn">Add</button>
          </a>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-4">
    </div>
  </div>
</div>


</body>
</html>