<?php 

$conn = mysqli_connect("localhost", "root", "", "db_master");


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

function confirm($data) {
		global $conn;
		$username = $_POST['username'];
		$email = $_POST['email'];
		$an = $_POST['an'];
		$metode = $_POST['metode'];
		$status_payment = "Pending";
		$tanggal = date("Y-m-d H:i:s");
		$nama_file = $_FILES['ss_payment']['name'];
		$lokasi = $_FILES['ss_payment']['tmp_name'];
		$error = $_FILES['ss_payment']['error'];
			
			if ($error === 4 ) {
				echo "<script>
						alert('Pilih file terlebih dahulu!')
						</script>";
				return false;
				
			}
			move_uploaded_file($lokasi, "file/".$nama_file);



		$query = "INSERT INTO payment	
					VALUES 
					('','$username','$email','$an','$metode' , '$metode' , '$nama_file', '$status_payment', '$tanggal')
					";
		mysqli_query($conn, $query);


		return mysqli_affected_rows($conn);
}



 ?>