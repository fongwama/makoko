<?php
/**
 * Created by PhpStorm.
 * User: lebeau BAFOUIDIZO
 * Date: 06/06/2016
 * Time: 22:33
 */

/* fixed by Ricken */

include_once('connexion.php');

if (isset($_GET['tag'])) {
    $req = $pdo->prepare('DELETE  FROM finalepharmacie WHERE id=?');
    $req->execute(array($_GET['tag']));
    header('location:../../dashboard.php?sms-confirm=pharmacie inseree avec succes');
}