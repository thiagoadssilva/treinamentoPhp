<?php
class Produto{
    private $nome;
    private $quantidade;
    private $valor;

    public function __construct() {
        $this->nome = "Açuca";
        $this->quantidade = "2";
        $this->valor = 0;
    }
}

$produtoCriado = new Produto();

var_dump($produtoCriado);