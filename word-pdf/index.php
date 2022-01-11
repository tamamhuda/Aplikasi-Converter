<?php 

require 'function.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login/");
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




	if ( isset($_POST['submit'])) {

		
		if( convert($_POST) > 0 ) {
			echo "<script>
					alert('Data Berhasil ditambahkan!')
					document.location.href = 'download.php'
					</script>";
		} else {
			echo "<script>
					alert('Data Gagal ditambahkan!')
					</script>";
		}

	
		
		
	} 
	
		
		

?>

<!DOCTYPE html>
<html>

<head>
	<title>Convert Word To PDF</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../upload.css">
</head>

	
<body>
	<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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
		<div class="file-upload">
		  <div class="file-upload-wrap">
		  	<input class="file-upload-input" type="file" name="word" onchange="readURL(this);" />
		  	<img style="width: 70px; margin-top: 30px;" src="../img/up-word.png">
		    
		    <div class="drag-text">
		    	<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Choose File</button>
		      <h5>or drop a file here</h5>
		    </div>

		  </div>
		  <div class="file-upload-content">
		    <img style="width: 80px; " src="../img/word.png">
		    <div class="image-title-wrap">
		      <button type="button" onclick="removeUpload()" class="remove-file">Remove <span class="image-title">Uploaded File</span></button>
		      <input type="text" name="username" value="<?php echo "$username"; ?>" hidden> <br> <br>
			  <button class="upload" type="submit" name="submit">Convert Now</button> 
		    </div>
		  </div>
		</div>
				
				
	</form>
	</div>

</body>
<script type="text/javascript">
	function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.file-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.file-upload-wrap').show();
}
$('.file-upload-wrap').bind('dragover', function () {
    $('.file-upload-wrap').addClass('image-dropping');
  });
  $('.file-upload-wrap').bind('dragleave', function () {
    $('.file-upload-wrap').removeClass('image-dropping');
});
</script>




</html>