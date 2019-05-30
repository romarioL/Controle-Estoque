<?php

require_once "ClassVendas.php";

class ClassEstoque extends ClassVendas {
	

	private $estoqueMinimo = 50;

	public function calcularEstoqueMinimo($id) {

		$array = $this->selecionarProdutoPorId($id);



	    foreach ($array as $dado) {


	    	if($dado['quantidade'] > $this->estoqueMinimo){
                 
                 $mensagem = "Produto dentro da quantidade desejada";
                 return $mensagem;

          }else {
          	     $mensagem = "Produto atingiu o estoque mínimo, avise ao seu gerente";
                 return $mensagem;
          } 
	   	 


	}
}
	

}
