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
	$email = $data["email"];

	if ($stat=="admin") {
		$status = "ON";
	} else {
		$status = "OFF";
	} 


$hasil = mysqli_query($conn, "SELECT * FROM payment WHERE username='$username'  ORDER BY id DESC LIMIT 1");
$data1 = mysqli_fetch_assoc($hasil);

$status_payment = $data1["status_payment"];


	if ($status_payment=="Done") {
		header("Location: ../");
	} 

	$user = $data1['username'];
	$email1 = $data1['email'];
	$an = $data1['an'];
	$metode = $data1['metode'];
	$tanggal = $data1['tanggal'];





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<link rel="stylesheet" type="text/css" href="../../style.css">


	<title>Status-Pembayaran</title>
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
			
			<form action="" method="POST" class="login-email" enctype="multipart/form-data">

				<table style="margin-top: 80px;">
					<tr>
						<td style="text-align: left;"><label>Email:</label></td>
						<td style="text-align: right;"> <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" readonly></td>
					</tr>
					<tr>
						<td  style="text-align: left;"> <label style="margin-top: 10px;">Metod Payment:</label></td>
						<td style="text-align: right;"> <input type="text" placeholder="Masukkan Metode Pembayaran " name="metode" value="<?php echo $metode; ?>" readonly ></td>
					</tr>
					<tr>
						<td  style="text-align: left;"> <label style="margin-top: 10px;">Pengirim</label></td>
						<td style="text-align: right;"> <input type="text" placeholder="Atas Nama Pengirim" name="an" value="<?php echo $an; ?>" readonly></td>
					</tr>
					<tr>
						<td  style="text-align: left;"> <label style="margin-top: 10px;">Tanggal</label></td>
						<td style="text-align: right;"> <input type="date" name="date" value="<?php echo $tanggal; ?>" readonly></td>
					</tr>
					<tr>
						<td  style="text-align: left;"> <label style="margin-top: 10px;">Status Pembayaran</label></td>
						<td style="text-align: right;"	> <input type="text"name="status_payment" value="<?php echo $status_payment; ?>" readonly></td>
					</tr>
				</table>
	

		</form>
		</div>

	
</body>
</html>