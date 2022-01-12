<?php

class Mouse {
    var $cor; 
    var $tamanho; 
    var $funcionando; 
    var $preco; 
    
    function quebrar(){
        $this->funcionando = false; 
    }
    
    function clicar (){
        if($this->funcionando){
            echo "<p>Estou clicando<p/>"; 
        
        } else {
            echo "<p> [ERRO] Mouse quebrado! =/ <p/>";
        }
    }
}
