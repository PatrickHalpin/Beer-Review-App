<?php
if(!isset($_COOKIE['userId'])) 
{
  $url="login.php";
  header('Location: ' . $url, false, 302);
    exit;
}
$userId=$_COOKIE['userId'];
include 'indexFunctions.php';
include 'links.php';
?>

<script type="text/javascript">
function test(id)
{
	$.ajax({
           type: "POST",
           url: 'testFunction.php',
           data:{action:'like', 'id' : id}
      });
  location.reload();
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
<?php for($i=0;$i<$arrL;$i++)
{
  $str='ups/'.$ids[$i].'.jpg';
  if (!file_exists($str)) 
      {
        $str="images2/iconRed.png";
      }
?>

<?php echo "<a href='drink.php?id=".$ids[$i]."'>"?>

<div class="col-xs-6 col-md-6 col-lg-2">
<div class="card">
<div class="cardHead">
 <img class="img" src= <?php echo $str ?> ">
</div>
 </a>
<div class="cardSub">
  <p class="drinkName"><?php echo $names[$i]?></p>
<!--     <p class="subName"><?php echo $types[$i]?></p>
 -->
  <?php 
  
  if(in_array($ids[$i],$usersList))
  {
    echo '<button class="btnAdded" > ADDED</button>' ;
  }
  else
  {
    echo "<button class='cardBtn' onclick='test(".$ids[$i].")'> ADD</button>" ;
  } 
  ?>

</div>
</div>
</div>

<?php } ?>
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