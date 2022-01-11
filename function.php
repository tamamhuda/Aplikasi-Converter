<?php 

$conn = mysqli_connect("localhost", "root", "", "db_master");


function convert($data) {
		global $conn;
		$username = $data["username"];
		$oldname = "Simplicity-".$_FILES['word']['name'];
		$lokasi = $_FILES['word']['tmp_name'];
		$error = $_FILES['word']['error'];
		
		if ($error === 4 ) {
			echo "<script>
					alert('Pilih file terlebih dahulu!')
					</script>";
			return false;
			
		}

		$extensi_word = ['docx', 'doc'];
		$ekstensi_file = explode('.', $oldname);

		$path = $ekstensi_file["1"];
		

		$newname = (dirname($oldname) ? dirname($oldname) . DIRECTORY_SEPARATOR  : '') . basename($oldname, "$path") . 'pdf';

		
		move_uploaded_file($lokasi, "file/".$newname);

		$file_word = $oldname;
		$file_pdf = ltrim($newname, '.');
		
		$tanggal = date("Y-m-d H:i:s");

		$query = "INSERT INTO file_word_pdf	
					VALUES 
					('','$username','$file_word','$label$file_pdf','$tanggal')
					";

		mysqli_query($conn, $query);


		return mysqli_affected_rows($conn);
}

function upload() {
	    
}


 ?>