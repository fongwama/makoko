<?php
include_once('connexion.php');
/**
 * Created by PhpStorm.
 * User: Ricken Brice BAZOLO
 * Date: 20/07/2016
 * Time: 14:12
 */

/**
 * traite la modification des pharmacies
 */

global $pdo;
try {
    $req = $pdo->prepare('SELECT * FROM finalepharmacie WHERE id = ? ORDER BY id LIMIT 0,30');
    return $req;
} catch (PDOException $e) {
    print "Erreur ! : " . $e->getMessage() . "<br />";
    die();
}