<?php

require_once 'scripts/connexion.php';

function getListeMangas() {
    $cnx = getConnexion();
    $requete = "select * from manga m join genre g on m.id_genre=g.id_genre";
    $prep = $cnx->prepare($requete); //On envoie la requête au SGBD
    $prep->execute(); // On exécute la requête sur le SGBD
    $mangas = $prep->fetchAll(); // On récupère toutes les lignes
    return $mangas;
}
