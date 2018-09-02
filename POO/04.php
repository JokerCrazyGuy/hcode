<?php

class Endereco{


	private $logadouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){

		$this->logadouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}


}

$meuEndereco = new Endereco("rua do ze","123","pindamonhongaba");

var_dump($meuEndereco);

?>