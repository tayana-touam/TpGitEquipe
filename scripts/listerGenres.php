<?php
require_once 'scripts/connexion.php';
function getListeGenres() {
    $cnx = getConnexion();
    $requete = "select * from genre";
    $prep = $cnx->prepare($requete); //On envoie la requête au SGBD
    $prep->execute(); // On exécute la requête sur le SGBD
    $genres = $prep->fetchAll(); // On récupère toutes les lignes
    return $genres;
}
