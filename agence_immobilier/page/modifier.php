<?php
    include "../inc/connection.php";
    include "../inc/fonction.php";
    $idhabit=$_GET['idhabit'];
    $habit = selectQuery(connectiondb(), "select * from habitation where idhabitation=$idhabit");
    $pathphoto=getPhotoHabitExt(connectiondb(), $idhabit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trano</title>
    <link href="../assets/bootstrap_theme/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/Modifier.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="header">
        <?php include('header.php');?>
    </div>
</header>
<div class="col-lg-6 center">
    <div class="col">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 fw-normal">Entrez vos modications</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">
                    <?php echo $habit[0]['loyerparjour'] ?>€
                    <small class="text-muted">/ jr</small></h1>
                <ul class="list-unstyled ">
                    <form method="post" action="../inc/modif.php">
                        <li><input placeholder="Nouvelle description" type="text"  name="descri" id="descri"></li>
                        <li><input type="hidden" name="idhabit" value="<?php echo $idhabit ?>"></li>
                        <li><input placeholder="Nombre de Chambres" type="number"  name="nbH" id="nbH"></li>
                        <li><input placeholder="Date debut de location" type="date"  name="datadebut" id="datadebut"></li>
                        <li><input placeholder="Date fin de location" type="date"  name="datefin" id="datefin"></li>
                        <li><input placeholder="Prix de location" type="number"  name="prix" id="prix"></li>
                        <li><input type="submit" class="w-100 btn btn-lg btn-primary" value="Executer"></li>
                    </form>

                </ul>

                <a href="../inc/delete.php?idhabit=<?php echo $idhabit ?>">
                    <button type="button" class="w-100 btn btn-lg btn-danger">Supprimer </button>
                </a>
            </div>
        </div>
        <div class=" bg-white mb-n5 p-3 shadow" style="position: relative;">
            <img src="../assets/img/<?php echo $pathphoto[0]['pathphoto'] ?>" class="img-fluid w-100" alt="Hero image" width="640" height="800">
        </div>
    </div>

</div>
</body>


