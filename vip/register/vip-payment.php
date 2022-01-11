<?php 

include '../config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
	$data = mysqli_fetch_assoc($result);

	$stat = $data["status"];

	if ($stat=="admin") {
		$status = "ON";
	} else {
		$status = "OFF";
	} 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<link rel="stylesheet" type="text/css" href="../../style.css">

	<title>VIP | Payment</title>
</head>

<body>

	<div class="nav-bar">
		<div class="nav-header">
			<div class="navbar-menu">
				<b><a style=" color: red; font-size: 18px;" href="#">VIP</b></a>
				<b><a style=" font-size: 13px; margin-left: 2px; background-color: #cfcf15; padding: 3px 5px 3px 5px; border-radius: 4px; color: white;" href="#"><?php echo "$status"; ?></b></a>  
				<b><a> | </b></a>
				<b><a> <?php echo "$username"; ?></a></b> 
				<b><a style="background-color: grey; padding: 3px 7px 3px 7px; border-radius: 4px; color: white;" href="login/logout.php">Logout</b></a> 
			</div>

			<div class="navbar-title">
				<b><a href="../../">Simplicity</a></b>
			</div>
		</div>
	</div>	


	<div class="benefit">
			
			<table class="tab-vip">
				<tr>
					<td>
						<div class="vip-qr">
							<img style="width: 150px;" src="../../img/qr.png">
						</div>
					</td>
					<td>
						<div class="garis-vertical"></div>
					</td>
					<td>
						
						<div class="vip-benefit">
							<img style="margin-left: 20px;" src="../../img/payment.png">

						</div>

					</td>
				</tr>
			</table>

			<button class="btn-vip"><a href="confirm-payment.php">Confirm Payment </a></button>

		</div>

	
</body>
</html>