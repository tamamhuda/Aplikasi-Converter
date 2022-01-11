<?php 

require 'function.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
	$data = mysqli_fetch_assoc($result);

	$stat = $data["status"];
	if ($stat=="vip") {
		$status = "ON";
	} else {
		$status = "OFF";
	} 


	$result = mysqli_query($conn, "SELECT * FROM file_word_pdf WHERE username='tamam' ORDER BY id DESC LIMIT 1");
	$data = mysqli_fetch_assoc($result);

	$pdf = ltrim($data["file_pdf"], '.');
	
	$pdf = ltrim($data["file_pdf"], '.');

	$new_pdf = substr($pdf, 0, 30)."..".".pdf";

	if (!$pdf) {
		header("Location: index.php");
	}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Download PDF
 	</title>
 	<link rel="stylesheet" type="text/css" href="../style.css">
 </head>
 <body>

 	<div class="nav-bar">
		<div class="nav-header">
			<div class="navbar-menu">
				<b><a style=" color: red; font-size: 18px;" href="../vip/">VIP</b></a>
				<b><a style=" font-size: 13px; margin-left: 2px; background-color: #cfcf15; padding: 3px 5px 3px 5px; border-radius: 4px; color: white;" href="../vip/"><?php echo "$status"; ?></b></a>  
				<b><a> | </b></a>
				<b><a> <?php echo "$username"; ?></a></b> 
				<b><a style="background-color: grey; padding: 3px 7px 3px 7px; border-radius: 4px; color: white;" href="../login/logout.php">Logout</b></a> 
			</div>

			<div class="navbar-title">
				<b><a href="../">Simplicity</a></b>
			</div>
		</div>
	</div>




	<div class="form-upload">
		<form action="" method="post" enctype="multipart/form-data">

			<table class="download" >
				<tr>
					<td valign="top">
						<div class="nama-pdf">
							<img style="width: 100px;" src="../img/PDF.png">
							<p ><?php echo "$new_pdf"; ?></p>
						</div>
					</td>
					<td>
						<div class="garis-vertical"></div>
					</td>
					<td>
						
						<div class="download-option">
							<table >
								<tr>
									<td>
										<label for="convert">
										<div class="box-option" for="convert">
											<input id="convert" type="radio" name="pdf-word" value="Convert To Word" checked='checked'> 
											<p style="padding-top: 16px;">Word To PDF</p>
										</div></label>
									</td>
									<td>
										<label for="merger">
										<button class="box-option" for="convert">
											
											<p>Merger Files</p>
										</button></label>
									</td>
								</tr>

							</table>
							 <button class="btn-download"><a href="file/<?php echo "$pdf"; ?>">download</button></a>	
						</div>
						
					</td>
				</tr>
			</table>

	</form>
	</div>
 
 </body>
 </html>