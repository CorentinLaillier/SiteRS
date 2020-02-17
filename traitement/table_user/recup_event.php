<?php
include("../../app/postevent.php");
include("../../app/postevent_management.php");

$postevent_management = new postevent_management();
$postevent_management->getEventInHtml();

 ?>