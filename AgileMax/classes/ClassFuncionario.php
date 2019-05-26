<?php 

require_once 'ClassConexao.php';

class ClassFuncionario extends ClassConexao {

	private $nome;

	private $usuario;

	private $senha;

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	public function getSenha() {
		return $this->senha;
	}

	public  function setSenha($senha) {
		$this->senha = $senha;
	}

	public function cadastrarFuncionario() {
		$conectar = $this->conectar();
		$stm = $conectar->prepare("INSERT INTO funcionarios(nome, usuario, senha) VALUES(:nome, :usuario, :senha)");
		$stm->bindParam(":nome", $this->nome, \PDO::PARAM_STR);
		$stm->bindParam(":usuario", $this->usuario, \PDO::PARAM_STR);
		$stm->bindParam(":senha", $this->senha, \PDO::PARAM_STR);
		$stm->execute();

	}
}