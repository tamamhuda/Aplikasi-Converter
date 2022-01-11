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






	if (isset($_POST['submit'])) {
		$user = $_POST['username'];
		$email1 = $_POST['email'];
		$an = $_POST['an'];
		$metode = $_POST['metode'];
		$status_payment = "Pending";
		$tanggal = date("Y-m-d H:i:s");

		$nama_file = $_FILES['payment']['name'];

		
		$lokasi = $_FILES['payment']['tmp_name'];
		$error = $_FILES['payment']['error'];
			
			if ($error === 4 ) {
				echo "<script>
						alert('Pilih file terlebih dahulu!')
						document.location.href = 'confirm-payment.php'
						</script>";

				return false;
				
			}

		move_uploaded_file($lokasi, "file/".$nama_file);

		$sql = "INSERT INTO payment (id, username, email, an, metode , ss_payment , status_payment, tanggal )
					VALUES ('','$user','$email1','$an','$metode' , '$nama_file', '$status_payment', '$tanggal')";
		$result = mysqli_query($conn, $sql);

		if (!$result) {
			echo "<script>
						alert('Pastikan Data yang anda kirim Benar!')
						document.location.href = 'confirm-payment.php'
						</script>";
		} else {
			echo "<script>
						alert('Data Berhasil dikirim!')
						document.location.href = 'status-payment.php'
						</script>";
		}
		
	} 



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<link rel="stylesheet" type="text/css" href="../../style.css">


	<title>Register Form</title>
</head>

<body>

	<div class="nav-bar">
		<div class="nav-header">
			<div class="navbar-menu">
				<b><a style=" color: red; font-size: 18px;" href="vip/">VIP</b></a>
				<b><a style=" font-size: 13px; margin-left: 2px; background-color: #cfcf15; padding: 3px 5px 3px 5px; border-radius: 4px; color: white;" href="vip/"><?php echo "$status"; ?></b></a>  
				<b><a> | </b></a>
				<b><a> <?php echo "$username"; ?></a></b> 
				<b><a style="background-color: grey; padding: 3px 7px 3px 7px; border-radius: 4px; color: white;" href="login/logout.php">Logout</b></a> 
			</div>

			<div class="navbar-title">
				<b><a href="">Simplicity</a></b>
			</div>
		</div>
	</div>	


		<div class="benefit">
			
			<form action="" method="POST" class="login-email" enctype="multipart/form-data">
           
			<div class="input-group">
				
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" readonly hidden>
				<label style="text-align: left;">Email:</label>
	    	 	<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" readonly>
	    	 	<label style="margin-top: 10px;">Metod Payment:</label>
				<input type="text" placeholder="Masukkan Metode Pembayaran " name="metode" value="<?php echo $_POST['metode']; ?>" required>
				<label style="margin-top: 10px;">Pengirim</label>
				<input type="text" placeholder="Atas Nama Pengirim" name="an" value="<?php echo $_POST['an']; ?>" required>
				<input class="file-upload-btn" type="file"  name="payment">
				<button name="submit" class="btn">Confirm Payment</button>
			</div>
		</form>
		</div>

	
</body>
</html>