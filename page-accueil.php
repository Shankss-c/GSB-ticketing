<?php
include "fonction-page-accueil.php";

include "config-page-accueil.php";


$identifiant_utilisateur = ($_POST['identifiant']);
$mdp_utilisateur = ($_POST['mdp']);

$connexion = GETPDO($config);
if (!empty($identifiant_utilisateur) and !empty($mdp_utilisateur)){
$insérer = $connexion->prepare('INSERT INTO authentification (identifiant, motDePasse) VALUES (? , ?)');

$insérer->execute(array($identifiant_utilisateur, $mdp_utilisateur));

header('location:page-accueil.html');
}
else {
    echo 'ERREUR, reessaie';
}
?>