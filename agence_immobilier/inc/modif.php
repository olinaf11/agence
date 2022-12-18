<?php
include "../inc/connection.php";
include "../inc/fonction.php";
$descri = $_POST['descri'];
$idhabit = $_POST['idhabit'];
$nbH = $_POST['nbH'];
$debut = $_POST['datadebut'];
$fin = $_POST['datefin'];
$prix = $_POST['prix'];
modif(connectiondb(),$nbH,$prix,$debut, $fin, $descri, $idhabit);
//header("Location:../page/Acceuil.php");