<?php 

require 'function.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login/");
}

$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
	$data = mysqli_fetch_assoc($result);

	$stat = $data["status"];

	$stat = $data["status"];
	if ($stat=="vip") {
		$status = "ON";
	} else {
		$status = "OFF";
	} 

	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Simplicity</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
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

	
	
	
	<div class="form-menu">

								
				<table width="100%" style="text-align: center; margin-top: 50px;">
					<tr>
						<td width="33%">
							<div class="box">
								<table style="color: black; height: 40px; ">
									<tr>
									<td width="150">
										<a href="pdf-word/"><div class="box-icon">
											<span style="font-size: 40px;line-height: 65px;" ><img src="img/pdf-word.png"></span>
										</div></a>
									</td>
									
								</tr>
								</table>
								<hr>
								<a href="pdf-word/"><h4 class="caption">PDF to Word</h4></a>
							</div>
							
						</td>
						<td>
							<div class="box">
								<table style="color: black; height: 40px; ">
									<tr>
									<td width="150">
										<a href="word-pdf/"><div class="box-icon">
											<span style="font-size: 40px;line-height: 65px;"> <img src="img/word-pdf.png"></span>
										</div></a>
									</td>
									
								</tr>
								</table>
								<hr>
								<a href="word-pdf/"><h4 class="caption">Word to PDF</h4></a>
							</div>
						</td>
						<td>
							<div class="box">
								<table style="color: black; height: 40px; ">
									<tr>
									<td width="150">
										<a href="compress/"><div class="box-icon">
											<span style="font-size: 40px; line-height: 0;"> <img style="max-width: 100px; margin-top: -12px; margin-left: 60px;  " src="img/compress.png"></span>
										</div></a>
									</td>
									
								</tr>
								</table>
								<hr>
								<a href="compress/"><h4 class="caption">Compress File</h4></a>
							</div>
						</td>
					</tr>
				</table>

		<div class="vip">
			
			<table>
				<tr>
					<td>
						<a href="vip/"><div class="vip-title">
							<p style="font-weight: 700; font-size: 50px; margin-top: -10px; margin-bottom: -30px; margin-left: 0; margin-right: -10px;">VIP</p>
							<p style="font-size: 20px; padding: 0;  margin-left: 10px;">Benefit</p>
						</div></a>
					</td>
					<td>
						<div class="garis-vertical"></div>
					</td>
					<td>
						
						<div class="vip-benefit">
							<p>Convert lebih dari 3 file sekaligus</p>
							<p>Menggabungkan beberapa file sekaligus </p>
							<p>Compress sesuai keinginan (ukuran / kualitas)</p>
						</div>

					</td>
				</tr>
			</table>

		</div>
		</div>
		<br>


</body>
</html>