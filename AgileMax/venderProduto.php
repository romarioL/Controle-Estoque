<?php


 require_once 'classes/ClassVendas.php';

 $venda = new ClassVendas();
 $quantidade = $venda->selecionarQuantidadePorId($_GET['id']);
 $total = $venda->vender($quantidade, $_POST['vendidos']);
 $venda->cadastrarQuantidade($total, $_GET['id']);

 header('location: vendas.php');