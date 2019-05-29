<?php 
session_start();
require_once 'classes/ClassLogin.php';

$logar = new ClassLogin();

$logar->setUsuario($_POST['usuario']);
$logar->setSenha($_POST['senha']);

$logado = $logar->logar();

if($logado == 1) {
	$_SESSION['logado'] = $logado;
}else {
	$_SESSION['logado'] = 0;
}





header('location: principal.php');


