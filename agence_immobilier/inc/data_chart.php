<?php
    function getDay($annee){
        $day = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        if ($annee%4 == 0 && $annee%100!=0 && $annee%400==0)
            $day[2] = 28;
        return $day;
    }
    function getCount($db,$annee, $mois, $jour){
        $sql = "select count(*) nombre
                    from reservation r         
                    join habitation h on h.idhabitation = r.idhabit
                    where datearrive<='".$annee."-".$mois."-".$jour."' and '".$annee."-".$mois."-".$jour."' <= datedepart";
        return selectQuery($db,$sql)[0];
    }
    function getSomme($db,$annee, $mois, $jour){
        $sql = "select sum(h.loyerparjour) as nombre
                    from reservation r         
                    join habitation h on h.idhabitation = r.idhabit
                    where datearrive<='".$annee."-".$mois."-".$jour."' and '".$annee."-".$mois."-".$jour."' <= datedepart";
        return selectQuery($db,$sql)[0];
    }
    function getNbrHabitOccupe($bd,$annee, $mois){
        $day = getDay($annee);
        $val = [];
        for ($i = 1; $i<=$day[$mois]; $i++){
            $val[] = getCount($bd, $annee, $mois, $i)['nombre'];
        }
        return json_encode($val);
    }
    function getLoyerHabit($bd,$annee, $mois){
        $day = getDay($annee);
        $val = [];
        for ($i = 1; $i<=$day[$mois]; $i++){
            $val[] = (getSomme($bd, $annee, $mois, $i)['nombre'] == null) ? 0 : getSomme($bd, $annee, $mois, $i)['nombre'];
    }
    return json_encode($val);
}
?>
