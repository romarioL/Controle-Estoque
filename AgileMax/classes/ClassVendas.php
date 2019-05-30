<?php

require_once "ClassProduto.php";

class ClassVendas extends ClassProduto {

	
	private $total;

	public function getTotal() {
		return $this->total;
	}



	public function vender($quantidade, $numeroVendidos){
	   $this->total = $quantidade -= $numeroVendidos;

	   return $this->total;

	}


	
}
