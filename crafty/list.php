<?php
if(!isset($_COOKIE['userId'])) 
{
  $url="login.php";
  header('Location: ' . $url, false, 302);
    exit;
}


include 'listFunctions.php';
include 'links.php';

if($arrL==0)
{

}
?>
  

<script type="text/javascript">


function remove(id)
{	
	var c='#'+id;
	$(c).fadeOut();
	$.ajax({
           type: "POST",
           url: 'testFunction.php',
           data:{action:'remove', 'id' : id}
      });
	window.setTimeout(location.reload(), 4000);
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
<?php 
if($arrL==0)
{?>
<div class="col-xs-12 col-md-12 col-lg-12">
<p class="empty">Your drinks list is empty! Add some more and come back.</p>

</div>
</div>
</div>

<?php }
else
{
for($i=0;$i<$arrL;$i++)
{

  $str='ups/'.$drinks[$i] .'.jpg';
  if (!file_exists($str)) 
    {
      $str="images2/iconRed.png";
    }
  ?>

<?php echo "<a href='drink.php?id=".$drinks[$i]."'>"?>

<div class="col-xs-6 col-md-6 col-lg-2">
<div class="card" id= <?php echo $drinks[$i] ?> >
<div class="cardHead">
<img class="img" src= <?php echo $str ?> ">
</div>
 </a>
<div class="cardSub">
  <p class="drinkName"> <?php echo $drinksName[$i]?></p>
  <button class="cardBtn" onclick="remove(<?php echo $drinks[$i] ?>)"> REMOVE</button>
</div>
</div>
</div>

<?php }} ?>
</div>
</div>
<div class="container-fluid">
      <div class="row" id="spacer">
        <div class="col-xs-12 col-md-12">
        <span id="ham">
        </span>
        </div>
      </div>
</div>

</body>
    
    

</html>