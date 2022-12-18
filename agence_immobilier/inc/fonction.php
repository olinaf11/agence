<?php
    function toArray($db,$tabName){
        $val = [];
        $query = $db->query("SELECT * FROM $tabName");
        $val = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $val;
    }
    function selectQuery($db, $query){
        $val = [];
        $resultat = $db->query($query);
        $val = $resultat->fetchAll(PDO::FETCH_ASSOC);
        $resultat->closeCursor();
        return $val;
    }
    function inscrire($db, $email, $name, $pswd, $tel, $admin){
        $db->exec("INSERT INTO users(email,name,password,phoneNumber,admin) values ('$email', '$name', '$pswd', '$tel',$admin)");
    }
    function login($db, $email, $password){
        return selectQuery($db, "SELECT * FROM users where email='$email' and password='$password'");
    }
    function isAdmin($db, $user){
        if (selectQuery($db,"select * from users where iduser=$user")[0]['admin'])
            return true;
        return false;
    }
    function getListHabitat($db, $type){
        return selectQuery($db, "select * from habitation where idtype=$type");
    }
    function getPhotoHabitExt($db, $idhabit){
        return selectQuery($db, "select * from photos where idhabit=$idhabit and isext=true");
    }
    function getPhotoDetail($db, $idhabit){
        return selectQuery($db, "select * from photos where idhabit=$idhabit and isext=false");
    }
    function add_Habits($db, $type, $nbrChambre, $loyer, $dateDebut, $dateFin, $quartier, $description){
        $db->exec("insert into habitation(idtype, nbrChambre, loyerparjour, dateDebut, dateFin, quartier, description) values ($type, $nbrChambre, $loyer, $dateDebut, $dateFin, $quartier, $description)");
    }
    function add_photo($db, $idhabit, $nom){
        $db->exec("insert into photos(idhabit, pathphoto) values ($idhabit, $nom)");
    }
    function add_habitation($db, $type, $nbrChambre, $loyer, $dateDebut, $dateFin, $quartier, $description,  $idhabit, $nom){
        add_Habits($db, $type, $nbrChambre, $loyer, $dateDebut, $dateFin, $quartier, $description);
        add_photo($db, $idhabit, $nom);
    }
    function modif($db, $nombreChambre, $loyer, $datedebut, $datefin, $description, $idHabit){
        $sql = "update habitation set nbrchambre=$nombreChambre, loyerparjour=$loyer, datedebut=$datedebut, datefin=$datefin, description=$description where idhabitation=$idHabit";
        echo $sql;
        $db->exec("update habitation set nbrchambre=$nombreChambre, loyerparjour=$loyer, datedebut=$datedebut, datefin=$datefin, description='$description' where idhabitation=$idHabit");
    }
    function deleteHabit($db, $idHabit){
        $db->exec("delete from photos where idhabit=$idHabit");
        $db->exec("delete from habitation where idhabitation=$idHabit");
    }
    function reserver($db, $idHabits, $dateDebut, $dateFin){
        $db->exec("insert into reservation(idhabit,datearrive,datedepart) values ($idHabits,'$dateDebut','$dateFin ')");
    }
    function getDispo($db, $idhabit, $debut, $fin){
        $val = selectQuery($db, "select * from reservation where idhabit=$idhabit and ((datedepart<'$fin' and datedepart>'$debut') or (datearrive>'$debut' and datearrive<'$fin'))");
        if (count($val)==0) return true;
        return false;
    }


