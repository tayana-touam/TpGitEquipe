<?php
function getConnexion(){
    $_connexion = new PDO('mysql:host=localhost;dbname=mangas', 'root', 'epul');
    return $_connexion;
}
