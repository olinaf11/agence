<?php
    include("connection.php");
    include("fonction.php");
    header( "Content-Type: application/json");
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    if (count(login(connectiondb(),$email, $mdp))!=0) {
        session_start();
        $_SESSION['iduser']=login(connectiondb(), $email, $mdp)[0]['iduser'];
        echo json_encode(login(connectiondb(), $email, $mdp));
    }else{
        echo json_encode(false);
    }
?>
