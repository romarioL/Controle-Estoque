<?php 
session_start();
require_once 'classes/ClassLogin.php';

$logar = new ClassLogin();

$logar->setUsuario($_POST['usuario']);
$logar->setSenha($_POST['senha']);

$logado = $logar->logar();

if($logado = true) {
	$_SESSION['logado'] = true;
}

header('location: principal.php');


