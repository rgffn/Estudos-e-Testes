<?php

class Caneta {
    public  $modelo; 
    private $ponta; 
    private $tampar; 
    private $cor; 
    
    function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
    }
    
    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getTampar() {
        return $this->tampar;
    }

    function getCor() {
        return $this->cor;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setTampar($tampar) {
        $this->tampar = $tampar;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }
    
}
