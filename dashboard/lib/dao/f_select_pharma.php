<?php
include_once('connexion.php');
/**
 * Created by PhpStorm.
 * User: Ricken Brice BAZOLO
 * Date: 20/07/2016
 * Time: 16:36
 */

/**
 * return les pharmacies
 */
global $pdo;
try {
    $req = $pdo->query('SELECT * FROM finalepharmacie  ORDER BY id LIMIT 0,30');
    return $req;
} catch (PDOException $e) {
    print "Erreur ! : " . $e->getMessage() . "<br />";
    die();
}

/*function getAllPharmacies(){
    global $pdo;
    try{
        $req = $pdo->query('SELECT * FROM finalepharmacie  ORDER BY id LIMIT 0,30');
        //$donnees = $req->fetch();
        return $req;
    }catch (PDOException $e){
        print "Erreur ! : " . $e->getMessage() . "<br />";
        die();
    }
}*/