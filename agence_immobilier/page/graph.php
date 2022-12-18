<?php
    include "../inc/connection.php";
    include "../inc/data_chart.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../assets/js/Chart.js"></script>
    <title>Graphique</title>
</head>
<body>
    <div class="container" style="margin-left: 300px">
        <h2 class="mt-5">Evolution du nombre d'habitation occupe par jour</h2>
        <canvas id="nbr"></canvas>
    </div><div class="container" style="margin-left: 300px">
        <h2 class="mt-5">Evolution du montant des loyers par jour</h2>
        <canvas id="sum"></canvas>
    </div>
</body>
    <script>
        var t = [];
        for (let i = 0; i < 31; i++) {
            t.push(i);
        }
        var xValues = t;
        new Chart("nbr",{
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: <?php echo getLoyerHabit(connectiondb(), 2022,12); ?>
                }]
            }
            // options: {
            //     legend: (display: false);
            // }
        });
        //new Chart("sum",{
        //    type: "line",
        //    data: {
        //        labels: xValues,
        //        datasets: [{
        //            data: <?php //echo getLoyerHabit(connectiondb(), 2022,12); ?>
        //        }]
        //    },
        //    options: {
        //        legend: (display: false)
        //    }
        //});

    </script>
</html>
