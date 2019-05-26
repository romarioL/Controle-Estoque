<?php 
 require_once  __DIR__ . '/../constants/constantes.php';
class ClassConexao {

	private $conexao;

	public function conectar() {
		if(!isset($conexao)) {
			$conexao = new \PDO("mysql:host=" . HOST . ";dbname=". DB . "" ,  "" . USER . "" , "" . PASS . "");
		}

		return $conexao;
	}
	
}