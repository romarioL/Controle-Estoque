<?php 

require_once "classes/ClassProduto.php";

$produto = new ClassProduto();
$produto->setNome($_POST['nome']);
$produto->setCodProduto($_POST['codProduto']);
$produto->setQuantidade($_POST['quantidade']);
$produto->editarProduto($_POST['id']);

header('location: listaProdutos.php');




