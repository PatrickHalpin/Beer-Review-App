<?php
if(!isset($_COOKIE['userId'])) 
{
  $url="login.php";
  header('Location: ' . $url, false, 302);
    exit;
}
$userId=$_COOKIE['userId'];
$lastDrinkId=$_COOKIE['lastDrinkId'];
include 'addImgFunctions.php';
include 'links.php';
include 'head.php';
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-4">
    </div>

    <div class="col-xs-12 col-md-4" id="login">
      <div class="logcard"> 
        <img class="img2" src="images2/iconRed.png">
        <div id="logSub">
          <form action="" method="POST" enctype="multipart/form-data">

           <center><input class="upload" type="file" name="image"/></center>
           <input type="submit" class="cardBtn" />
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