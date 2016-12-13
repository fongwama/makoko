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
$maladie= $_POST["maladie"];



if (isset($nom) AND isset($prix) AND isset($maladie)) {

    $req = $pdo->prepare('SELECT COUNT(*) AS nombre FROM finaleproduit WHERE  nom = ?');
    $req->execute(array($nom));
    while ($donnees = $req->fetch()) {
        if ($donnees['nombre'] == 0) {

            if (isset($_FILES['mon_fichier']) AND $_FILES['mon_fichier']['error'] == 0) {
                if ($_FILES['mon_fichier']['size'] <= 7000000) {

                    $infosfichier =
                        pathinfo($_FILES['mon_fichier']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('png', 'jpeg', 'jpg');

                    if (in_array($extension_upload, $extensions_autorisees)) {

                        move_uploaded_file($_FILES['mon_fichier']['tmp_name'], '../images/produit-image/' .
                            basename($_FILES['mon_fichier']['name']));

                        $req = $pdo->prepare('INSERT INTO finaleproduit (nom,prix,maladie,image)VALUES(?,?,?,?)');
                        $req->execute(array($nom, $prix, $maladie,$_FILES['mon_fichier']['name']));
                        header('location:../../add_produce.php?sms-confirm=produit inseree avec succes');

                    } else {

                        header('location:../../add_produce.php?sms-error=extension non autorise');
                    }
                } else {
                    header('location:../../add_produce.php?sms-warnig=image trop lourde');
                }

            }
        } else {
            header('location:../../add_produce.php?sms-warning=existe deja dans la base de donnees');
        }
    }
}
?>