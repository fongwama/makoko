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
$email = $_POST["email"];
$tel = $_POST["tel"];
$message = $_POST["message"];

if (isset($nom) AND isset($email) AND isset($tel) AND isset($message)) {

    $req = $pdo->prepare('SELECT COUNT(*) AS nombre FROM pharmacie WHERE  nom = ?');
    $req->execute(array($nom));



    while ($donnees = $req->fetch()) {

        if ($donnees['nombre'] == 0) {

                        $req = $pdo->prepare('INSERT INTO pharmacie (nom,adresse,tel,message)VALUES(?,?,?,?)');
                        $req->execute(array($nom,$email,$tel,$message));

                        header('location:../../../sante+/vues/soumettre.php?sms-confirm=votre soummession est en examen');

        } else {
            header('location:../../../sante+/vues/soumettre.php?sms-warning=echec de soumission');
        }
    }
}