<?php 

$conn = mysqli_connect("localhost", "root", "", "db_master");


function convert($data) {
		global $conn;
		$username = $data["username"];
		$oldname = "Simplicity-".$_FILES['pdf']['name'];
		$lokasi = $_FILES['pdf']['tmp_name'];
		$error = $_FILES['pdf']['error'];
		
		if ($error === 4 ) {
			echo "<script>
					alert('Pilih file terlebih dahulu!')
					</script>";
			return false;
			
		}

		$ekstensi_pdf = ['pdf'];
		$ekstensi_file = explode('.', $oldname);
		$path = $ekstensi_file["1"];
		
		$ekstensi_file = strtolower(end($ekstensi_file));

		if (!in_array($ekstensi_file, $ekstensi_pdf)) {
			echo "<script>
					alert('File yang anda upload bukan PDF!')
					</script>";
			return false;

		}

		
		

		$newname = (dirname($oldname) ? dirname($oldname) . DIRECTORY_SEPARATOR  : '') . basename($oldname, "$path") . 'docx';

		
		move_uploaded_file($lokasi, "file/".$newname);

		$file_pdf = $oldname;
		$file_word = ltrim($newname, '.');
		
		$tanggal = date("Y-m-d H:i:s");

		$query = "INSERT INTO file_pdf_word	
					VALUES 
					('','$username','$file_pdf','$file_word','$tanggal')
					";

		mysqli_query($conn, $query);


		return mysqli_affected_rows($conn);
}



 ?>