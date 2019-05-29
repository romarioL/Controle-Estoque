<?php 



require_once 'ClassConexao.php';

class ClassLogin extends ClassConexao {


	private $usuario;

	private $senha;

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	public  function getSenha() {
		return $this->senha;
	}

	public function setSenha($senha)  {
		$this->senha = $senha;
	}

	public function logar() {

		$conexao = $this->conectar();
		$bfetch = $conexao->prepare("SELECT * FROM funcionarios WHERE usuario = :usuario AND senha = :senha");
		$bfetch->bindParam(":usuario", $this->usuario, \PDO::PARAM_STR);
		$bfetch->bindParam(":senha", $this->senha, \PDO::PARAM_STR);
		$bfetch->execute();


		if($bfetch->rowCount() != 1) {

			$logado = 0;

			return $logado;

		}else {
			$logado = 1;
			return $logado;
		}


   }


}
