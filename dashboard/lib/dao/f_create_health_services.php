<?php
include_once("connexion.php");
/**
 * Created by PhpStorm.
 * User: lebeau BAFOUIDIZO
 * Date: 06/06/2016
 * Time: 16:53
 */

// Fixed by Ricken BAZOLO

include_once('connexion.php');

if(isset($_POST["service"])){
    $req = $pdo->prepare('SELECT COUNT(*) AS nombre FROM finaleservice WHERE  servicename = ?');
    $req->execute(array($_POST["service"]));
    while($donnees = $req->fetch()) {
        if ($donnees['nombre']==0) {
            $req = $pdo->prepare('INSERT INTO finaleservice(servicename) VALUES (?)');
            $req->execute(array($_POST["service"]));
            header('location:../../create_categories.php?sms=insertion reussie');
        }
        else{
            header('location:../../create_categories.php?sms=ce service existe déjà');
        }
    }
    header('location:../../create_categories.php?sms=ce service existe déjà');
}
