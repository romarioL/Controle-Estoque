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

    <title>Lista de funcionário</title>
  </head>
  <body class="bg-info">

    <div class=" container card mt-5">
      <div class="card-header">
        <h2>Lista de funcionários</h2>
      </div>
      <div class="card-body">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Usuario</th>
              <th scope="col">Senha</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
        <?php
        require_once 'classes/ClassFuncionario.php';
        $funcionario = new ClassFuncionario();
        $array =  $funcionario->listarFuncionarios();

        foreach($array as $valor) {
         
        
        ?>
         
            <tr>
              <th scope="row"><?php echo $valor['id'] ?></th>
              <td><?php echo $valor['nome'] ?></td>
              <td><?php  echo $valor['usuario'];?></td>
              <td><?php  echo $valor['senha']?></td>
              <td><a href="editar.php?id=<?php echo $valor['id']; ?>" class="btn btn-warning mr-5">Editar</a><a href="" class="btn btn-danger">Deletar</a></td>
            </tr>
          
        <?php } ?>
        </tbody>
        </table>
      </div>
    </div>


  <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/jquery.modal.min.js"></script>
  </body>
</html>