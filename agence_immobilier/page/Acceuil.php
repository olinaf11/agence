<?php
    include "../inc/connection.php";
    include "../inc/fonction.php";
    session_start();
    $iduser = $_SESSION['iduser'];
    $habitation = getListHabitat(connectiondb(), 1);

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
    </head>
    <body>
    <header>
        <div class="header">
            <?php include('header.php');?>
        </div>
    </header>
        <main role="main">
            <section class="jumbotron text-center" style="background-size: cover;">
                <div class="container">
                    <h1 class="jumbotron-heading" style="color: #302828;">Nouvelle Habitation?</h1>
                    <p class="lead text-muted" style="text-transform: !important; color: #982121;">Nous vous offrons un maximun de choix pour votre nouveau chez Vous,des proprietes d'exceptions,des prix abordables et surtout une  totale accesiblite sur les proprietes</p>
            </section>
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
                            <?php for ($i = 0; $i<count($habitation); $i++) { ?>
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img style="max-height: 10%" class="card-img-top" src="../assets/img/<?php echo getPhotoHabitExt(connectiondb(), $habitation[$i]['idhabitation'])[0]['pathphoto']; ?>" alt=""/>
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $habitation[$i]['description']; ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="#">
                                                        <a href="detail.php?idhabit=<?php echo $habitation[$i]['idhabitation']; ?>">
                                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                        </a>
                                                    </a>
                                                    <?php if ( isAdmin(connectiondb(),$iduser)){ ?>
                                                        <a href="modifier.php?idhabit=<?php echo $habitation[$i]['idhabitation']; ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                                                    <?php } ?>
                                                </div><small class="text-muted"><h4><?php echo $habitation[$i]['loyerparjour']; ?>€</h4></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        </main>
    </body>
</html>