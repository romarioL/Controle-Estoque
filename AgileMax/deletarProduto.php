<?php 

require_once "classes/ClassProduto.php";

$produto = new ClassProduto();
$produto->deletarProduto($_GET['id']);

header('location: listaProdutos.php');