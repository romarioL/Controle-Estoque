<?php 

require_once 'classes/ClassProduto.php';

$produto = new ClassProduto();

$produto->setNome($_POST['nomeProduto']);
$produto->setCodProduto($_POST['codigoDoProduto']);
$produto->setQuantidade($_POST['quantidade']);
$produto->setFuncionario($_POST['funcionario']);
$produto->cadastrarProduto();

header('location: principal.php');
