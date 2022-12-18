<?php
    include "../inc/connection.php";
    include "../inc/fonction.php";
//    echo $_GET['debut'];
    if (getDispo(connectiondb(), $_GET['idhabit'],  $_GET['debut'], $_GET['fin'])){
        reserver(connectiondb(), $_GET['idhabit'], $_GET['debut'], $_GET['fin']);
        header("Location:../page/detail.php?couleur=success&idhabit=".$_GET['idhabit']);
    }
    else{
        header("Location:../page/detail.php?couleur=primary&idhabit=".$_GET['idhabit']);
    }
?>