<?php
define("USERNAME", "ricken");
define("PASSWORD", "emma");
define("DNS", "mysql:host=localhost;dbname=ngembo");
try {
    $pdo = new PDO(DNS, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (Exception $e) {
    print "Erreur ! : " . $e->getMessage() . "<br />";
    die();
}


