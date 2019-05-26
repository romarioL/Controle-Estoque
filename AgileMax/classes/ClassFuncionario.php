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

	public function listarFuncionarios() {
		$conectar = $this->conectar();
		$stm = $conectar->prepare("SELECT * FROM funcionarios");
		$stm->execute();
		$i = 0;
		while($fetch = $stm->fetch(\PDO::FETCH_ASSOC)) {
			$array[$i] = ['id' => $fetch['id'], 'nome' => $fetch['nome'], 'usuario' => $fetch['usuario'], 'senha' => $fetch['senha'] ];

		$i++;
          
			
		}

		return $array;
	}

	public function selecionarFuncionario($id) {

		$conectar = $this->conectar();
		$stm = $conectar->prepare("SELECT id, nome, usuario, senha  FROM funcionarios WHERE id = :id");
		$stm->bindParam(":id", $id, \PDO::PARAM_INT);
		$stm->execute();
		$i = 0;
		while($fetch = $stm->fetch(\PDO::FETCH_ASSOC)) {
			$array[$i] = ['id' => $fetch['id'], 'nome' => $fetch['nome'], 'usuario' => $fetch['usuario'], 'senha' => $fetch['senha'] ];

		$i++;
          
			
		}

		return $array;

	}

	public function editarUsuario($id) {

		$conectar = $this->conectar();
		$stm = $conectar->prepare("UPDATE funcionarios  SET nome = :nome, usuario = :usuario, senha = :senha WHERE id = :id");
		$stm->bindParam(":id", $id, \PDO::PARAM_INT);
		$stm->bindParam(":nome", $this->nome, \PDO::PARAM_STR);
		$stm->bindParam(":usuario", $this->usuario, \PDO::PARAM_STR);
		$stm->bindParam(":senha", $this->senha, \PDO::PARAM_STR);
		$stm->execute();

	}
}