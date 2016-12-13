<?php
include_once("connexion.php");
/**
 * Created by PhpStorm.
 * User: Ricken BAZOLO
 * Date: 03/08/2016
 * Time: 09:15
 * Retrieve health services
 */

global $pdo;
try {
    $req = $pdo->query('SELECT * FROM finaleservice ORDER BY id');
    return $req;
} catch (PDOException $e) {
    print "Erreur ! : " . $e->getMessage() . "<br />";
    die();
}