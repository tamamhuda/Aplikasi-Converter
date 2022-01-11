<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: ../");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$username = $_POST['username'];

	$sql = "SELECT * FROM users WHERE email='$email' AND username='$username'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$password = $row['password'];
		echo "<script>alert('Password Anda Adalah $password')
		document.location.href = 'index.php'

		</script>";

	} else {
		echo "<script>alert('Woops! Email or Username is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Forgot Password</title>
</head>
<body>

	<div class="navigasi">	
			<a href="../index.php"><p> < Simplicity </p> </a>
	</div>	

		
		    <div class="container">	
				<form action="" method="POST" class="login-email">
					<p class="login-text" style="font-size: 2rem; font-weight: 800;">Forgot Password </p>
					<div class="input-group">
						<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
					</div>
					<div class="input-group">
						<input type="username" placeholder="username" name="username" value="<?php echo $_POST['username']; ?>" required>
					</div>
					<div class="input-group">
						<button name="submit" class="btn">Request Password</button>
					</div>
					<p class="login-register-text">have an account? <a href="index.php">Login Here</a>.</p>
				</form>
			</div>


		<div class="footer">
		 <br> 2021 © Simpility Developed By Kelompok 6 	

		</div>	

</body>
</html>