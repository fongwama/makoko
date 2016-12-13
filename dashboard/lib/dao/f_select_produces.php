<?php
include_once("connexion.php");
/**
 * Created by PhpStorm.
 * User: Ricken BAZOLO
 * Date: 03/08/2016
 * Time: 12:20
 */

global $pdo;
try {
    $req = $pdo->query('SELECT * FROM finaleproduit ORDER BY id DESC LIMIT 0,10');
    return $req;
} catch (PDOException $e) {
    print "Erreur ! : " . $e->getMessage() . "<br />";
    die();
}