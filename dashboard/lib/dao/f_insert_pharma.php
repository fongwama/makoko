<?php
/**
 * Created by PhpStorm.
 * User: lebeau BAFOUIDIZO
 * Date: 06/06/2016
 * Time: 22:33
 */

//Fixed by Ricken BAZOLOs

include_once("connexion.php");

global $pdo;

$nom = $_POST["nom"];
$tel = $_POST["tel"];
$adresse = $_POST["adresse"];
$gps = $_POST["gps"];
$ville = $_POST["ville"];
$quartier = $_POST["quartier"];


if (isset($nom) AND isset($tel) AND isset($adresse) AND isset($ville) AND isset($quartier)  AND isset($gps)) {

    $req = $pdo->prepare('SELECT COUNT(*) AS nombre FROM finalepharmacie WHERE  tel = ?');
    $req->execute(array($tel));
    while ($donnees = $req->fetch()) {
        if ($donnees['nombre'] == 0) {

            if (isset($_FILES['mon_fichier']) AND $_FILES['mon_fichier']['error'] == 0) {
                if ($_FILES['mon_fichier']['size'] <= 7000000) {

                    $infosfichier =
                        pathinfo($_FILES['mon_fichier']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('png', 'jpeg', 'jpg');

                    if (in_array($extension_upload, $extensions_autorisees)) {

                        move_uploaded_file($_FILES['mon_fichier']['tmp_name'], '../images/pharma-image/' .
                            basename($_FILES['mon_fichier']['name']));

                        $req = $pdo->prepare('INSERT INTO finalepharmacie (nom,tel,adresse,gps,ville,quartier,image)VALUES(?,?,?,?,?,?,?)');
                        $req->execute(array($nom, $tel, $adresse, $gps,$ville,$quartier, $_FILES['mon_fichier']['name']));
                        header('location:../../add_pharma.php?sms-confirm=pharmacie inseree avec succes');

                    } else {

                        header('location:../../add_pharma.php?sms-error=extension non autorise');
                    }
                } else {
                    header('location:../../add_pharma.php?sms-warnig=image trop lourde');
                }

            }
        } else {
            header('location:../../add_pharma.php?sms-warning=existe déjà dans la base de donnees');
        }
    }
}
?>