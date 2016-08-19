<?php
require_once 'scripts/connexion.php';
function getListeMangasGenre() {
    $cnx = getConnexion();
    $idGenre = $_POST["cbGenres"]; 
    $requete = "select * from manga m join genre g on m.id_genre=g.id_genre where g.id_genre = ?";
    $prep = $cnx->prepare($requete); //On envoie la requête au SGBD
    $prep->execute(array($idGenre)); // On exécute la requête sur le SGBD
    $mangas = $prep->fetchAll(); // On récupère toutes les lignes
    return $mangas;
}