<form method="POST" action="">
	<center>
	<nav style="height: 5%; bgcolor: brown; border:5%">
		<a href="posting.php">Posting</a>
		<a href="daftarpostingan.php">Daftar Posting</a>
		<a href="semuaposting.php">Semua Posting</a>
		<a href="editprofile.php">Edit Profile</a>
	</nav>
</center>
</form>
<form action="" method="POST" enctype="multipart/form-data">
	<center>
		<h2>POSTING MAHASISWA</h2>
		<table border="2" cellpadding="2">
				<tr>
				<td>NIM</td>
				<td>: <input type="number" name="nim" row='20' cols='80' style= "border-color: green"></td>
				</tr>
				<tr>
					<td>Masukkan Cerita</td>
					<td>: <input type="textarea" name="cerita"
					row='20' cols='80' style= "border-color: green"></td>
				</tr>	
				<tr>
					<td>Upload Foto</td>
					<td>: <input type="file" name="foto"></td>
				</tr>	
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
		</table>
	</center>
</form>
<?php
session_start();
	if (isset($_POST['submit'])) {
		$komen 	= $_POST['cerita'];
		$foto		= $_FILES["foto"]["name"];

		$hasil = str_word_count($komen);

		if ($hasil < 30) {
			echo "ERROR";
		}else{
			echo "Jumlah Kata :" .$hasil;
		}

		if (isset($_POST['submit'])) {
		$_SESSION['nim'] = $nim; 
		header("location: halamanawal.php");
	}
		
	}


?>