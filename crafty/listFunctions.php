<?

$id=$_COOKIE['userId'];

$drinks=array();
$drinksName=array();
$drinksType=array();
$arrL=0;

$dbh = new PDO('mysql:host=localhost:8889;dbname=Beer','patrick','password');
$query="SELECT * FROM drinksRel WHERE uid = '$id' ";
$data = $dbh->query($query);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $output) 
{
	array_push($drinks,$output['did']);
	array_push($drinksName,$output['name']);
	array_push($drinksType,$output['type']);
	$arrL=count($drinks);
}

?>