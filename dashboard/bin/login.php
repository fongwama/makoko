<?php

include_once("../lib/dao/connexion.php"); // modify

if ($_POST['connexion']) {

    /* global object connection return from connexion.php */
    global $pdo;

    /* filter and convert character*/

    //login
    $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);

    //pass word
    $passeWord = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);


    $req = $pdo->prepare('SELECT * FROM admin WHERE login = :login AND password = :password');

    $req->execute(array(
        'login' => $login,
        'password' => $passeWord,
    ));

    $result = $req->fetch();

    if (!$result) {
        header('location:../login.php?smsjdjsdsjdshdjhsdjshdjshdjshdjsdhsjdhsdhjsdhshdsjdsjdhshdssjdsds=jgt?iy');
    } else {
        session_start();
        $_SESSION['id'] = $result['id'];
        $_SESSION['nom'] = $result['nom'];
    }

    if (isset($_SESSION['id'])) {
        header('location:../dashboard.php');
    } else {
        header('location:../index.php');
    }

}



