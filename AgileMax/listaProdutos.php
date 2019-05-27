<?php
 session_start();

 require_once 'classes/ClassLogin.php';

 if($_SESSION['logado'] = false) {
 	header('location: index.php');

 }
?>

<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/jquery.modal.min.css">
     <link rel="stylesheet" href="css/style.css">

    <title>Lista de produtos</title>
  </head>
  <body class="bg-info">

    <div class=" container card mt-5">
      <div class="card-header">
        <h2>Lista de produtos</h2>
      </div>
      <div class="card-body">

        <?php

        require_once 'classes/ClassProduto.php';

        $produto = new ClassProduto();
        $dados = $produto->selecionarProdutos();

        $i = 0;

        foreach($dados as $dado) {
          $array[$i] = array('y' => $dado['quantidade'], 'label' => $dado['nome']);
          $i++;
        }



         ?>

         <div id="chartContainer" style="height: 370px; width: 100%;"></div>


         
      </div>
    </div>

   
<script type="text/javascript">
           window.onload = function() {
 
                  var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title:{
                      text: "Gold Reserves"
                    },
                    axisY: {
                      title: "Gold Reserves (in tonnes)"
                    },
                    data: [{
                      type: "column",
                      yValueFormatString: "#,##0.## tonnes",
                      dataPoints: <?php echo json_encode($array, JSON_NUMERIC_CHECK); ?>
                    }]
                  });
                  chart.render();
                   
                  }
         </script>

  <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/jquery.modal.min.js"></script>
    <script src="assets/canvasjs.min.js"></script>
  </body>
</html>