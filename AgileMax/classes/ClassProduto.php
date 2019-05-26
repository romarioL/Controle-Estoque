<?php 

require_once 'ClassConexao.php';

class ClassProduto extends ClassConexao {

	private $codProduto;

	private $nome; 

	private $quantidade;

	private $funcionario;

	public function getCodProduto() {
		return $this->codProduto;
	}

	public function setCodProduto($codProduto) {
		$this->codProduto = $codProduto;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getQuantidade() {
		return $this->quantidade;
	}

	public function setQuantidade($quantidade) {
		$this->quantidade = $quantidade;
	}

	public function getFuncionario() {
		return $this->funcionario;
	}

	public function setFuncionario($funcionario) {
		$this->funcionario = $funcionario;
	}

	public function cadastrarProduto() {
		$conexao = $this->conectar();
		$stm = $conexao->prepare("INSERT INTO produtos(codProduto, nome, quantidade, id_funcionario) VALUES(:codProduto, :nome, :quantidade, :id_funcionario)");
		$stm->bindParam(":codProduto", $this->codProduto, \PDO::PARAM_INT);
		$stm->bindParam(":nome", $this->nome, \PDO::PARAM_STR);
		$stm->bindParam(":quantidade", $this->quantidade, \PDO::PARAM_INT);
		$stm->bindParam(":id_funcionario", $this->funcionario, \PDO::PARAM_INT);
		$stm->execute();
	}
}