<?php  
	$connect = mysqli_connect("localhost", "root", "", "siters");
	$sql = "DELETE FROM post WHERE id = '".$_POST["id"]."'";
	if(mysqli_query($connect, $sql)) {
		echo 'Données supprimées';
	}  
 ?>