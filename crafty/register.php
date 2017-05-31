<?php 
include 'registerFunctions.php';
include 'links.php';

?>

    
<title>Register</title>
</head>
<body id="body">

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-4">
		</div>

		<div class="col-xs-12 col-md-4" id="login">
			<div class="logcard"> 
				<img class="img2" src="images2/iconRed.png">
				<div id="logSub">
					<form method="post" id="input">  
					Email
					<br>
					<input type="text" name="email" class="logs"">
 					<br>
					Username
					<br>
					<input type="text" name="name" class="logs">
					<br>
					Password
					<br>
					<input type="password" name="pass" class="logs">
					<br>
					Confrim Password
					<br>
					<input type="password" name="pass2" class="logs">
					<br>
					<input type="submit" name="submit" value="Sign Up" class="cardBtn">  
					<br>
					</form>
					<a class="link" href="login.php"> Already a user? Login</a>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-4">
		</div>
	</div>
</div>
    
</body>
    

</html>