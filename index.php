<!DOCTYPE html>
<html>
<head>
    <title>Computação Gráfica - 2016-02</title>
    <!-- Alunos:  -->
    <!-- Robson Paiva -->
    <!-- William Becher -->

<script src="./assets/jquery/jquery-3.1.0.min.js"></script>
<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-theme.min.css">
<script src="./assets/chartjs/chart.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<?php 
    require_once('histograma.php');
 ?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <h2>Computação Gráfica - Trabalho 1</h2>
  </div>
</nav>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <h3>Histograma</h3>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <img src="./imagens/lena.png" alt="">
        </div>
        <div class="col-xs-6">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3>Média da Metade Direita</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <?php 
                $soma = 0;
                $qtde = 0;

                $metade_largura = floor($largura/2);

                for ($i=0; $i <= $altura; $i++) { 
                    // echo $i . " | ";
                    for ($j=$metade_largura; $j <= $largura ; $j++) { 
                        // echo $j . " | ";
                        $qtde++;
                    }
                    // echo "<br>";
                }
                echo "Qtde: " . $qtde . " pixels na metade direita.";
            ?>
        </div>
    </div>
</div>

<script>
var ctx = document.getElementById("myChart").getContext("2d");

var data = {
    labels: [
        <?php
        for ($i=0; $i <= 255; $i++) { 
            echo "\"" . $i . "\",";
        }
         ?>
        ],
    datasets: [
        {
            label: "Histograma",
            backgroundColor: [],
            borderColor: [],
            borderWidth: 1,
            data: [ <?php 
                for ($i=0; $i <= 255; $i++) { 
                    echo "\"" . $histograma[$i] . "\",";
                }
             ?> ],
        }
    ]
};

var histograma = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        responsive: true
    }
});
</script>

</body>
</html>