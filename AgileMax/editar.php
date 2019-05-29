<?php
 session_start();

 require_once 'classes/ClassLogin.php';

 if(isset$_SESSION['logado'] == 0) {
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

    <title>Cadastrar Funcionário</title>
  </head>
  <body class="bg-info">

    <div class=" container card mt-5">
      <div class="card-header">
        <h2>Cadastro</h2>
      </div>
      <div class="card-body">
        <form action="editando.php" method="post">

          <?php require_once 'classes/ClassFuncionario.php';
        $funcionario = new ClassFuncionario();
        $array =  $funcionario->selecionarFuncionario($_GET['id']);

        foreach($array as $valor) {
               
          ?>
           <input type="hidden" class="form-control" name="id" value="<?php  echo $valor['id'];?>">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" value="<?php  echo $valor['nome'];?>">
          <label for="usuario">Usuario</label>
          <input type="text" class="form-control" name="usuario" value="<?php echo $valor['usuario']; ?>">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" name="senha" value="<?php echo $valor['senha']; ?>">
          <input type="submit" class="btn btn-warning mt-3" value="Editar">

          <?php } ?>
       </form>
      </div>
    </div>


  <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/jquery.modal.min.js"></script>
  </body>
</html>