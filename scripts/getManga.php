<?php

require_once 'scripts/connexion.php';
$titrePage = "Ajout d'un Manga";

function getManga() {
    $manga = (object)null;
    $manga->id_manga = 0;
    $manga->titre = "";
    $manga->id_genge = 0;
    $manga->couverture = "";
    if (isset($_REQUEST['id_manga'])) {
        $titrePage = "Modification d'un Manga";
        $id_manga = $_REQUEST['id_manga'];
        $cnx = getConnexion();
        $requete = "select * from manga where id_manga=?";
        $prep = $cnx->prepare($requete);
        $prep->execute(array($id_manga));
        $result = $prep->fetchObject();
        $manga['id_manga'] = $result->id_manga;
    }
    return $manga;
}
