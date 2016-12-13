<?php
/**
 * Created by PhpStorm.
 * User: lebeau BAFOUIDIZO
 * Date: 06/06/2016
 * Time: 22:33
 */


/* fixed by Ricken */

include_once('connexion.php');
$nom = $_POST["nom"];
$tel = $_POST["tel"];
$adresse = $_POST["adresse"];
$gps = $_POST["gps"];
$ville = $_POST["ville"];
$quartier = $_POST["quartier"];
$tag = $_POST["tag"];

if (isset($nom) AND isset($tel) AND isset($adresse)  AND isset($gps) AND isset($tag)) {

    $req = $pdo->prepare('SELECT COUNT(*) AS nombre FROM finalepharmacie WHERE  tel = ?');
    $req->execute(array($tel));
    while ($donnees = $req->fetch()) {
        if ($donnees['nombre'] == 1) {

            if (isset($_FILES['mon_fichier']) AND $_FILES['mon_fichier']['error'] == 0) {
                if ($_FILES['mon_fichier']['size'] <= 7000000) {

                    $infosfichier =
                        pathinfo($_FILES['mon_fichier']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('png', 'jpeg', 'jpg');

                    if (in_array($extension_upload, $extensions_autorisees)) {

                        move_uploaded_file($_FILES['mon_fichier']['tmp_name'], 'pharma-image/' .
                            basename($_FILES['mon_fichier']['name']));

                        $req=$pdo->prepare('UPDATE finalepharmacie SET nom=?,adresse=?,tel=?,gps=?,ville=?,quartier=?,image=? WHERE id=?');
                        $req->execute(array(
                            htmlspecialchars($nom),
                            htmlspecialchars($adresse),
                            htmlspecialchars($tel),
                            $gps,
                            $ville,
                            $quartier,
                            $_FILES['mon_fichier']['name'],$tag
                        ));
                        header('location:../../dashboard.php?sms-confirm=pharmacie inseree avec succes');

                    } else {

                        header('location:../../dashboard.php?sms-error=extension non autorise');
                    }
                } else {
                    header('location:../../update_pharama.php?sms-warnig=image trop lourde');
                }

            }
        } else {
            header('location:../../update_pharama.php?sms-warning=existe deja dans la base de donnees');
        }
    }
}
