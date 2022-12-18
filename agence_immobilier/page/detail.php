<?php
    include "../inc/connection.php";
    include "../inc/fonction.php";
    $idhabit = $_GET['idhabit'];
    $habit = getPhotoHabitExt(connectiondb(), $idhabit);
    $habitation = selectQuery(connectiondb(), "select * from habitation where idhabitation=$idhabit");
    $detail = getPhotoDetail(connectiondb(), $idhabit);
    $couleur = "primary";
    if (isset($_GET['couleur'])){
        $couleur = $_GET['couleur'];
    }
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trano</title>
    <link href="../assets/bootstrap_theme/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/detail.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="header">
        <?php include('header.php');?>
    </div>


</header>

<div class="container">
    <h1><?php echo $habitation[0]['description']; ?></h1>
    <p class="lead"><?php echo $habitation[0]['quartier']; ?></p>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img1">
                <img class="airbnb"src="../assets/img/<?php echo $habit[0]['pathphoto']; ?>">
            </div>
            <div class="col-lg-6 imgs">
                <div class="row">
                    <?php
                    for($i=0;$i<count($detail);$i++){
                        ?>
                        <div class="col-lg-6 image">
                            <img class="airbnb"src="../assets/img/<?php echo $detail[$i]['pathphoto'];  ?>">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<!--    <h3>Logement entier:#</h3>-->
    <h3>Nombre de chambre : <?php echo $habitation[0]['nbrchambre']; ?></h3>
    <div class="col">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 fw-normal">Tarif</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><?php echo $habitation[0]['loyerparjour']; ?>€ <small class="text-muted">/ jour</small></h1>
                <form method="get" action="../inc/reservation.php" class="mt-3 mb-4">
                    <p>
                        <input type="date" name="debut"></br>
                        <input type="hidden" name="idhabit" value="<?php echo $idhabit; ?>">
                        <input type="date" name="fin">
                    </p>
                    <input type="submit" class="w-100 btn btn-lg btn-<?php echo $couleur; ?>" value="Reserver">
                </form>
<!--                <button type="button" class="w-100 btn btn-lg btn-primary">Reserver</button>-->
            </div>
        </div>
    </div>
</div>


</body>
