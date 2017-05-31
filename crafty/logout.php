<?php
	setcookie("userId", "", time()-3600);
	$url="login.php";
	header('Location: ' . $url, false, 302);
  	exit;
?>

<html>
<body>
	logged out
</body>
</html>