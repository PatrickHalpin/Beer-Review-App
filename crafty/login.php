<?php 
session_start();

include 'loginFunctions.php';
include 'links.php';

?>
 
    
<title>Login</title>
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
					Username
					<br>
					<input type="text" name="name" class="logs">
					<br>
					Password
					<br>
					<input type="password" name="pass" class="logs">
					<br>
					<input type="submit" name="submit" value="Login" class="cardBtn">  
					<br>
					</form>
					<a class="link" href="register.php"> Not a user? Register</a>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-4">
		</div>
	</div>
</div>
    
</body>
    
    

</html>