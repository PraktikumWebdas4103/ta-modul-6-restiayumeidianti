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
<?php
session_start();
	if (isset($_POST['submit'])) {
		$komen 	= $_POST['cerita'];
		$foto		= $_FILES["foto"]["name"];
	}
	if (isset($_POST['submit'])) {
		$_SESSION['nim'] = $nim; 
		header("location: halamanawal.php");
	}
?>