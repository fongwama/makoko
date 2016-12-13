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

$tel = $_POST["tel"];
$password = $_POST["password"];
$statut = $_POST["optionsRadios"];


if (isset($tel) AND isset($password) AND isset($statut)) {

    $req = $pdo->prepare('SELECT COUNT(*) AS nombre FROM agent WHERE  tel = ?');
    $req->execute(array($tel));
    while ($donnees = $req->fetch()) {
        if ($donnees['nombre'] == 0) {

            header('location:../../create_admin.php?sms-error=cet agent n\'existe pas dans la liste des agents agrees ');

        } else {
            $req = $pdo->prepare('INSERT INTO admin (login,password,statut)VALUES(?,?,?)');
            $req->execute(array($tel,$password,$statut));

            header('location:../../create_admin.php?sms-confirm=agent creer avec succes');
        }
    }
}
?>