<?php
include_once("connexion.php");
/**
 * Created by PhpStorm.
 * User: lebeau BAFOUIDIZO
 * Date: 06/06/2016
 * Time: 22:33
 */
//Fixed by Ricken BAZOLO

global $pdo;

$nom = $_POST["nom"];
$prix = $_POST["prix"];
$adresse = $_POST["adresse"];
$description = $_POST["description"];
$categuorie = $_POST["categuorie"];


if (isset($nom) AND isset($prix) AND isset($adresse) AND isset($description) AND isset($categuorie)) {

    $req = $pdo->prepare('SELECT COUNT(*) AS nombre FROM finaleexamen WHERE  nom = ?');
    $req->execute(array($nom));
    while ($donnees = $req->fetch()) {
        if ($donnees['nombre'] == 0) {

                        $req = $pdo->prepare('INSERT INTO finaleexamen (nom,prix,lieu,categuorie,description)VALUES(?,?,?,?,?)');
                        $req->execute(array($nom, $prix, $adresse, $categuorie,$description));
                        header('location:../../add_exam.php?sms-confirm=examen inseree avec succes');

        } else {
            header('location:../../add_exam.php?sms-warning=existe deja dans la base de donnees');
        }
    }
}
?>