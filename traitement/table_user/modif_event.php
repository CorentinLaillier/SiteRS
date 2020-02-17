<?php
include("../../app/postevent.php");
include("../../app/postevent_management.php");
require_once('../../app/connexionpdo.php');

$id = $_POST["id"];
$text = $_POST["text"];
$colonne = $_POST["column_name"];

$post = new postevent([
	'idpost' => $id,
	'texte' => $text
]);

$postevent_management = new postevent_management();
$postevent_management->editEvent($post, $colonne);
?>

