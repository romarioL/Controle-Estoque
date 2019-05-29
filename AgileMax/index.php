<?php 
session_start();

if(isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
  header('location: principal.php');
}

 ?>

<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/jquery.modal.min.css">
     <link rel="stylesheet" href="css/style.css">

    <title> Agile Max</title>
  </head>
  <body class="bg-info">

    <div class="card-login container center">
     <div class="banner">
       <a href="#modalLogin" class="btn btn-primary" rel="modal:open"><h3>Login: Clique aqui pra logar.</h3></a>
     </div>
    </div>

    <div id="modalLogin" class="modal">

      <form  action="login.php" method="post" class="formLogin">

        <label for="usuario">Usuario</label>
        <input type="text" class="form-control" name="usuario">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha">
        <input type="submit" class="btn btn-primary mt-3" value="Logar">
      </form>
      
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/jquery.modal.min.js"></script>
  </body>
</html>