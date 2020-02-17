<?php
include("../../app/postevent.php");
include("../../app/postevent_management.php");

$titre = $_POST['titre'];
$texte = $_POST['texte'];

$post = new postevent([
    'titre' => $titre,
    'texte' => $texte
]);

$postevent_management = new postevent_management();
$postevent_management->addEvent($post);
 ?>

