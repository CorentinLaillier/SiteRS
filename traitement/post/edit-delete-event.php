<?php
session_start();
require_once('../../app/postevent.php');
require_once('../../app/postevent_management.php');

$input = filter_input_array(INPUT_POST);
$titre = $input['titre'];
$texte = $input['texte'];
$post = new postevent([
    'id' => $input['id'],
    'titre' => $titre,
    'texte' => $texte
]);
if($input["action"] === 'edit') {


    $postevent_management = new postevent_management();
    $postevent_management-> test();


}



exit(0);