<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	
	$db = "db_restoran";
	$conn = mysqli_connect($host,$user,$pass,$db);
		
	if (!$conn) {
   		die('Maaf koneksi gagal: '. $conn->connect_error);
	}
	else{
		//echo 'Tahu';
		//echo $_SESSION['viewnya'];
	}	
?>