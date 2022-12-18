<?php
    include "../inc/connection.php";
    include "../inc/fonction.php";
    $mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];
    $tel = $_POST['tel'];
    $admin = $_POST['admin'];
    $message = "";
    if (strcmp($_POST['mdp'], $_POST['newmdp'])!=0){
        echo $mdp;
        echo $_POST['newmdp'];
        $message = "mot de passe erreur";
        header("Location:../page/login.php?erreur=".$message);
    }else{
        inscrire(connectiondb(), $mail, $nom, $mdp, $tel, $admin);
        header("Location:../page/login.php?reussite=".$message);
    }
