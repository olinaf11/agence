
<!Doctype html>
<html>
<head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="Login.css" />
        <title>Trano</title>
</head>
<body>
    <div id="header">
        <img src="./images/Trano1.png" style="width:150px">        
    </div>
    <div id="descri">
        <h1 style="color:with">BIENVENU SUR TRANO<h1>
            <p style="font-size:16px">
                Une platefome ouverte a tous ceux qui recherche un hebergement pour evenements diverses
                Trouvez des hebergement de haute qualite niveau confort et mode de vie a des tarifs 
                abordables 
          </p>   
          <h4>Administrateur</h4>      
        <form method="post" action="#">
                <input placeholder="Entrer votre mail" type="mail"  name="mail" id="mail">   
                <input placeholder="Entrer votre mots de passe" type="password"  name="mdp" id="mdp"> 
                <input style="background-color: black;width: 215px ;" type="submit" value="Se connecter">
        </form>
    
    </div>
    <div id="middle">
        <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-align:center;" id="titre2">
        INSCRIVEZ-VOUS
        </h3>
        <p style="text-align:center;color: white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">En tant que Client </p>
        <hr style="width:91%">
    <form method="post" action="#">
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
                <input style="background-color: black;width: 215px ;" type="submit" value="S'inscrire" id="submit">
        </form>
    </div>
    
        
</body>
</html>