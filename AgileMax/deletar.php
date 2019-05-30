<?php 

require_once 'classes/ClassFuncionario.php';

$funcionario  = new ClassFuncionario();

$funcionario->deletarFuncionario($_GET['id']);


header('location: listaFuncionario.php');
