<?php 

require_once 'classes/ClassFuncionario.php';

$funcionario = new ClassFuncionario();
$funcionario->setNome($_POST['nome']);
$funcionario->setUsuario($_POST['usuario']);
$funcionario->setSenha($_POST['senha']);

$funcionario->editarUsuario($_POST['id']);

header('location: listaFuncionario.php');