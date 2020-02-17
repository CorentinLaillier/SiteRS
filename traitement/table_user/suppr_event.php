<?php
include("../../app/postevent.php");
include("../../app/postevent_management.php");
require_once('../../app/connexionpdo.php');

$id = $_POST["id"];

$post = new postevent([
    'idpost' => $id,
]);

$postevent_management = new postevent_management();
$postevent_management->deleteEvent($post);
 ?>