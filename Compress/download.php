<?php 

require 'function.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$name = $_SESSION['username'];


	$result = mysqli_query($conn, "SELECT * FROM file_compress WHERE username='$name' ORDER BY id DESC LIMIT 1");
	$data = mysqli_fetch_assoc($result);

	$pdf = ltrim($data["file_pdf"], '.');

	$file_size = $data["file_size"];

	$quality_1 = 25;

	$quality_2 = 50;

	$quality_3 = 75;

	$low_quality = ($quality_1/100)*$file_size;
	$medium_quality = ($quality_2/100)*$file_size;
	$high_quality = ($quality_3/100)*$file_size;


	$new_pdf = substr($pdf, 0, 30)."..".".pdf";

	if (!$new_pdf) {
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
				<b><a style=" color: red; font-size: 18px;" href="vip/">VIP</b></a>
				<b><a style=" font-size: 13px; margin-left: 2px; background-color: #cfcf15; padding: 3px 5px 3px 5px; border-radius: 4px; color: white;" href="vip/">OFF</b></a>  
				<b><a> | </b></a>
				<b><a> <?php echo "$name"; ?></a></b> 
				<b><a style="background-color: grey; padding: 3px 7px 3px 7px; border-radius: 4px; color: white;" href="../login/logout.php">Logout</b></a> 
			</div>

			<div class="navbar-title">
				<b><a href="../">Simplicity</a></b>
			</div>
		</div>
	</div>




	<div class="form-upload">
		
		<div class="download-option">
							
			<table class="download" >

				<tr>
					<td valign="top">
						<div class="nama-pdf">
							<img style="width: 100px;" src="../img/PDF.png">
							<p ><?php echo "$new_pdf"; ?></p>
							<p ><?php echo "$file_size"; ?> KB</p>
						</div>
					</td>
					<td>
						<div class="garis-vertical"></div>
					</td>
					<td>
						<div class="option">
							<h3>Choose Quality</h3>
							<div id="myDIV">
							  <button class="btn">
							  		<table width="100%">
							  			<tr>
								  			<td width="50%" style="text-align: left;">Low quality</td>
								  			<td style="text-align: right;"><?php echo "$low_quality"; ?> KB </td>
							  			</tr>
							  		</table>
							  </button>
							  <button class="btn">
							  	<table width="100%">
							  			<tr>
								  			<td width="50%" style="text-align: left;">Medium quality</td>
								  			<td style="text-align: right;"><?php echo "$medium_quality"; ?> KB</td>
							  			</tr>
							  		</table>
							  </button>
							  <button class="btn">
							  	<table width="100%">
							  			<tr>
								  			<td width="50%" style="text-align: left;">High quality</td>
								  			<td style="text-align: right;"><?php echo "$high_quality"; ?> KB</td>
							  			</tr>
							  		</table>
							  </button>
							</div>

							<script>
							// Tambahkan kelas aktif ke tombol saat ini (sorot)
							var header = document.getElementById("myDIV");
							var btns = header.getElementsByClassName("btn");
							for (var i = 0; i < btns.length; i++) {
							  btns[i].addEventListener("click", function() {
							  var current = document.getElementsByClassName("active");
							  if (current.length > 0) { 
							    current[0].className = current[0].className.replace(" active", "");
							  }
							  this.className += " active";
							  });
							}
							</script>
						
						</div>
						
							 <button class="btn-download"><a href="file/<?php echo "$pdf"; ?>">download</button></a>	
						</div>
						
					</td>
				</tr>
			</table>


	</div>

 	
 
 </body>
 </html>