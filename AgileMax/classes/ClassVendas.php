<?php

require_once "ClassProduto.php";

class ClassVendas extends ClassProduto {

	

	private $estoqueMinimo = 50;

	private $total;

	public function getTotal() {
		return $this->total;
	}



	public function vender($quantidade, $numeroVendidos){
	   $this->total = $quantidade -= $numeroVendidos;

	   return $this->total;

	}


	public function estoqueMinimo($quantidade){


		if($quantidade <= $this->estoqueMinimo) {
               $avisoTela = "Chegamos no estoque mínimo, avise seu chefe";
               return $avisoTela;
		}
	}
	
}
