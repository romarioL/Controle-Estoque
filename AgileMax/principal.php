<?php
 session_start();

 require_once 'classes/ClassLogin.php';

 if($_SESSION['logado'] == 0) {
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

    <title> Controle de estoque</title>
  </head>
  <body class="bg-info">
  
  <?php include "navbar.php"; ?>

<div class="painel container">
	<div class="row mt-5 mb-5">
		<div class="col-sm-12 col-lg-12">
			<div class="card">
				<div class="card-header"><h3 class="center">Produtos</h3></div>
				<div class="card-body">
					<ul class="nav flex-column">
 						 <li class="nav-item">
   							 <a class="nav-link active" href="cadastrarProduto.php">Cadastrar Produtos</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" href="listaProdutos.php">Listar produtos</a>
  						</li>
  		
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-5 mb-5">
		<div class="col-sm-12 col-lg-6 mb-5 ">
			<div class="card">
				<div class="card-header"><h3 class="center">Funcionários</h3></div>
				<div class="card-body">
					<ul class="nav flex-column">
 						 <li class="nav-item">
   							 <a class="nav-link active" href="cadastrarFuncionario.php"> Cadastrar funcionário</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" href="listaFuncionario.php">Listar funcionários</a>
  						</li>
  		                <li class="nav-item">
    						<a class="nav-link" href="vendas.php">Vendas</a>
  						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-6">
			<div class="card">
				<div class="card-header"><h3 class="center">Estoque</h3></div>
				<div class="card-body">
					<ul class="nav flex-column">
 						 <li class="nav-item">
   							 <a class="nav-link active" href="produtosEstoque.php"> Estoque de produtos</a>
  						</li>
				</div>
			</div>
		</div>
	</div>
</div>

  <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/jquery.modal.min.js"></script>
  </body>
</html>