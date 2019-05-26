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
}