<?php

require_once 'connexion.php';
$cnx = getConnexion();
$titre = $_POST["titre"];
$id_genre = $_POST["cbGenres"];
$couverture = $_POST["couverture"];
$tmp_name = $_FILES['couverture']['tmp_name'];
if ($tmp_name != "") {
    $image = basename($_FILES['couverture']['name']);
    $ok = move_uploaded_file($tmp_name, "../images/" . $image);
    if ($ok) {
        $couverture = $image;
    }
}
$id_manga = $_REQUEST['id_manga'];
if ($id_manga > 0) {
    $requete = "update manga set titre = ?, couverture = ?, id_genre = ? where id_manga=?";
    $parametres = array($titre, $couverture, $id_genre, $id_manga);
} else {
    $requete = "insert into manga (titre, couverture, id_genre) values (?, ?, ?)";
    $parametres = array($titre, $couverture, $id_genre);
}
$prep = $cnx->prepare($requete);
$prep->execute($parametres);
header("location: /mes-mangas/getListeMangas.php");

