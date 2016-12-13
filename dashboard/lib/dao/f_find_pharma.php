<?php
include_once("connexion.php");
/**
 * Created by PhpStorm.
 * User: Ricken BAZOLO
 * Date: 03/08/2016
 * Time: 12:41
 */

try {

    if(isset($_GET['tag'])) {
        $req = $pdo->prepare('SELECT * FROM finalepharmacie WHERE id =? ORDER BY id DESC ');
        $req->execute(array($_GET['tag']));
        return $req;
    }
} catch (PDOException $e) {
    print "Erreur ! : " . $e->getMessage() . "<br />";
    die();
}
