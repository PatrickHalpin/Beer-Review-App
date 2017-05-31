<?php
if(!isset($_COOKIE['userId'])) 
{
  $url="login.php";
  header('Location: ' . $url, false, 302);
    exit;
}
$userId=$_COOKIE['userId'];
include 'addFunctions.php';
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
        <img class="img2" src="images2/iconRed.png">
        <div id="logSub">
          <form method="post" id="input">  
          Drink Name
          <br>
          <input type="text" name="drinkName" class="logs"">
          <br>
          Type
          <br>
          <input type="text" name="drinkType" class="logs">
          <br>
          
          <input type="submit" name="submit" value="Next" class="cardBtn">  
          <br>
          </form>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-4">
    </div>
  </div>
</div>


</body>
    
    

</html>