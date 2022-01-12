<?php


class Pessoa {

    private $cor; 
    private $tamanho; 
    private $nome; 
    private $cidade; 
    
    function __construct($cor, $tamanho, $nome, $cidade) {
        $this->cor = $cor;
        $this->tamanho = $tamanho;
        $this->nome = $nome;
        $this->cidade = $cidade;
    }

    function getCor() {
        return $this->cor;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getNome() {
        return $this->nome;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }


    
}
