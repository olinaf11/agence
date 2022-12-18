<?php
    include "../inc/connection.php";
    include "../inc/fonction.php";
    $idhabit=$_GET['idhabit'];
    deleteHabit(connectiondb(), $idhabit);
    header("Location:../page/Acceuil.php");