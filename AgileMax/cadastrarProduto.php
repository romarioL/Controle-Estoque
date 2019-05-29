<?php
 session_start();

 require_once 'classes/ClassLogin.php';

 if($_SESSION['logado'] == false) {
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

    <title>Cadastrar Produto</title>
  </head>
  <body class="bg-info">

    <div class=" container card mt-5">
      <div class="card-header">
        <h2>Cadastro  de produtos</h2>
      </div>
      <div class="card-body">

        <form action="cadastrandoProduto.php" method="post">
         
         
          <label for="nomeProduto">Nome do produto</label>
          <input type="text" class="form-control" name="nomeProduto">
          <label for="codigoDoProduto">Código do produto</label>
          <input type="text" class="form-control" name="codigoDoProduto">
          <label for="quantidade">Quantidade</label>
          <input type="text" class="form-control" name="quantidade">
          <label for="funcionario">Funcionário</label>
          <select name="funcionario" class="form-control">
            <?php

            require_once 'classes/ClassFuncionario.php';

            $funcionario = new ClassFuncionario();

            $array = $funcionario->listarFuncionarios();

            foreach($array as $valor) {
             ?>
             <option value="<?php echo $valor['id']; ?>"><?php  echo $valor['nome'];?></option> 

           <?php } ?>
          </select>
          <input type="submit" class="btn btn-primary mt-3" value="Cadastrar Produto">

        
       </form>
      </div>
    </div>


  <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/jquery.modal.min.js"></script>
  </body>
</html>