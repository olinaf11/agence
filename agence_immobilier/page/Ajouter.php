<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trano</title>
    <link href="bootstrap_theme/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet">
    <link href="ajouter.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-dark bg-dark box-shadow">
    <div class="container d-flex justify-content-between"><a href="Acceuil.php" class="navbar-brand d-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                <img src="./images/Trano1.png" style="width: 100px">
            </svg> <strong>Trano</strong> </a>
        <form class="form-inline my-2 my-lg-0" method="post" action="#">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button id="bout"class="btn btn-outline-success my-2 my-sm-0" type="submit" >Rechercher</button>
        </form>
        <a href="Acceuil.php"><button type="button" class=" btn btn-lg btn-danger">Trano </button></a>
    </div>
</div>
<div class="row text"><h4 class="fw-normal">Inserez les images de votre propriete</h4></div>
<div class="col-lg-0 bg-white mb-n5 p-3 shadow" style="position: relative;">
    <div class="container1">
        <div class="upload" >
            <!-- upload -->
            <img src="./images/cam.jfif" style="width: 100%">

        </div>
    </div>
</div>
</div>
<div class="col-lg-6 center">
    <div class="col">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 fw-normal">Entrez les informations de votre bien</h4>
            </div>

            <ul class="list-unstyled ">
                <form method="post" action="#">
                    <li> <input class="fichier" type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                        <input  type="file" /></li>
                    <li><input placeholder="Nouvelle description" type="text"  name="descri" id="descri"></li>
                    <li><input placeholder="Nombre de Chambres" type="number"  name="nbH" id="nbH"></li>
                    <li><input placeholder="Date debut de location" type="datadebut"  name="datadebut" id="datadebut"></li>
                    <li><input placeholder="Date fin de location" type="datefin"  name="" id="datefin"></li>
                    <li><input placeholder="Prix de location" type="number"  name="prix" id="prix"></li>

                </form>

            </ul>
            <button type="button" class="w-100 btn btn-lg btn-success">Valider </button>


        </div>
</body>
