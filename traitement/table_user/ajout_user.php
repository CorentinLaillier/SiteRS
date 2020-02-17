<?php
// On fait appel au classe
include("../../app/utilisateur.php");
include("../../app/utilisateur_management.php");

// On stock les valeurs envoyées en POST
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
// On stock dans $utilisateur l'objet utilisateur en indiquant le titre et le texte
$utilisateur = new utilisateur([
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'mdp' => $mdp
]);
// On stock la classe utilisateur_management dans $utilisateur_management
$utilisateur_management = new utilisateur_management();
// On effectue la fonction addUser en envoyant l'objet $utilisateur et le type d'ajout en paramètre
$utilisateur_management->addUser($utilisateur, "admin");
 ?>

