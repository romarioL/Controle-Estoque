<?php 

require_once 'classes/ClassLogin.php';

$logar = new ClassLogin();

$logar->setUsuario($_POST['usuario']);
$logar->setSenha($_POST['senha']);

$logar->logar();


header('location: principal.php');