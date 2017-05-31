<?php
if(!isset($_COOKIE['userId'])) 
{
  $url="login.php";
  header('Location: ' . $url, false, 302);
    exit;
}
include 'drinkFunctions.php';
include 'links.php';

?>
<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
<script src="js/star-rating.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).on('ready', function()
{
    $("#input-5").rating().on("rating.clear", function(event) 
    {
        alert("Your rating is reset")
    }).on("rating.change", function(event, value, caption)
    {
        test(value);
    });
});

function test(value)
{
	var did =  <?php echo $id;  ?> ;
	$.ajax({
           type: "POST",
           url: 'testFunction2.php',
           data:{action:'like', 'value' : value, 'drinkId' : did}
      });
}
</script>
    
<?php
include 'head.php';
?>


<div class="container-fluid">
	<div class="row" id="bar">
		<div class="col-xs-12 col-md-12">
			<span id="ham" onclick="openNav()">
				 ☰ 
				 <span class="drinkHead"> <?php echo $drinkName ?> </span>
			</span>
		</div>
	</div>
</div>
<div class="container-fluid">
			<div class="row" id="spacer">
				<div class="col-xs-12 col-md-12">

				</div>
			</div>
</div>


<div class="rating">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<input id="input-5" name="input-5" <?php echo "value=".$userRating ;?> class="rating" data-step="1" data-show-clear="false" data-show-caption="false">
			</div>
	</div>
</div>
</div>



<?php 

$str='ups/'.$id .'.jpg';
  if (!file_exists($str)) 
      {
        $str="images2/iconRed.png";
      }

?>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-md-3">
</div>
<div class="col-xs-12 col-md-6">
<img class="img3" src=<?php echo $str ?>>
</div>
<div class="col-xs-12 col-md-3">
</div>
</div>
</div>


<?php for($i=0;$i<$arrL;$i++)
{
$len=strlen($reviews[$i]);
if($len>0)
{
?>

<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-md-3">
</div>
<div class="col-xs-12 col-md-6">
<div class="box">
 	<p class="name"> <?php echo $reviews[$i] ?></p>
</div>
<div class="col-xs-12 col-md-3">
</div>
</div>
</div>
</div>
<?php } }?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-4">
		</div>
		<div class="col-xs-12 col-md-4">
			<form method="post" id="input" class="review">  
				Leave a review
				<br>
				<textarea type="text" name="review" class="input"></textarea> 
				<br>
				<input type="submit" name="submit" value="Submit" class="subBtn">  
				<br>
			</form>
		</div>
		<div class="col-xs-12 col-md-4">
		</div>
	</div>
</div>
</body>
    
    

</html>