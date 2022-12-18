<!Doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href=".././assets/css/login.css" />
    <title>Trano</title>
</head>
<body>
    <div id="header">
        <img src="../assets/img/Trano1.png" style="width:150px" alt="">
    </div>
    <div id="descri">
        <h1 style="color:white">BIENVENU SUR TRANO<h1>
            <p style="font-size:16px">
                Une platefome ouverte a tous ceux qui recherche un hebergement pour evenements diverses
                Trouvez des hebergement de haute qualite niveau confort et mode de vie a des tarifs 
                abordables 
          </p>         
        <form id="myForm" method="post" action="">
            <input placeholder="Entrer votre mail" type="email" name="email" id="email">
            <input placeholder="Entrer votre mots de passe" type="password" name="mdp" id="mdp">
            <input style="background-color: black;width: 215px ;" type="submit" value="Se connecter">
        </form>
    </div>
    <div id="middle">
        <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-align:center;" id="titre2">
            INSCRIVEZ-VOUS
        </h3>
        <p style="text-align:center;color: white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">En tant que Client </p>
        <hr style="width:91%">
        <form method="post" action="../inc/inscritption.php">
            <div id="email">
                <input placeholder="Entrer votre email" type="mail"  id="mail" name="mail">
            </div>
            <div id="name">
                <input placeholder="Entrer votre nom" type="text" id="nom" name="nom">
            </div>
            <div id="password">
                <input placeholder="Choisissez votre mots de passe" type="password" id="mdp" name="mdp">
            </div>
            <div id="newpassword">
                <input placeholder="Retaper mots de passe" type="password" id="newmdp" name="newmdp">
            </div>
            <div id="tel">
                <input placeholder="Entrer votre num tel" type="text" id="tel" name="tel">
            </div>
            <div id="admin">
                <select name="admin" id="admin">
                    <option value="true">Est admininstrateur</option>
                    <option value="false">false</option>
                </select>
            </div>
            <input style="background-color: black;width: 215px ;" type="submit" value="S'inscrire" id="submit">
            <p style="color: red"><?php if (isset($_GET['erreur'])) echo $_GET['erreur']; ?></p>
        </form>
    </div>
</body>
<script src="../assets/js/login.js"></script>
</html>