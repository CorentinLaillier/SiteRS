<?php  
$connect = mysqli_connect("localhost", "root", "", "siters");
$sql = "INSERT INTO post(titre, texte, date) VALUES('".$_POST["titre"]."', '".$_POST["texte"]."', NOW())";
if(mysqli_query($connect, $sql)) {
     echo 'Données insérées';
}
 ?>

