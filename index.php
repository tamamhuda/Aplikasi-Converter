<?php 

require 'function.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}




 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simplicity</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style type="text/css">
		body {
	background-image: url(img/bg.jpg);
    background-size: cover;
    overflow: hidden;
    background-repeat: no-repeat;
		}
	</style>
</head>
<body>

	<div class="nav">
		<div class="nav-header">
			<div class="nav-menu">
				<b><a href="login/">Feature</b></a> 
				<b><a href="login/">About</b></a> 
				<b><a href="login/">Login</b></a> 
			</div>
		</div>
	</div>

	<div class="head1">
		Simplicity <p style="font-size: 30px; color: #1a1ac3; background-color: #ddd; width: 458px; padding-left: 10px; border-radius: 5px; ">Easy Online File Converter</p>
		
	</div>
	
	

 
</body>
</html>