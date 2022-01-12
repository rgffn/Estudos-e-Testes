<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> classes e objetos </title>
    </head>
    <body>
        <?php
        require_once 'Mouse.php';
        
        $m1 = new Mouse(); 
        $m2 = new Mouse();
        
        $m1->cor = "Preto"; 
        $m1->funcionando = true; 
        $m1->tamanho = 5;
        $m1->preco = "R$ 30,00"; 
        
        echo " ===== INFORMAÇÔES MOUSE 1 ===== <br/>"; 
        print_r($m1); 
        $m1->clicar();
        
        $m2->cor = "Cinza";
        $m2->funcionando = true; 
        $m2->tamanho = 7; 
        $m2->preco = " R$ 50,00 ";
        $m2->quebrar(); 
        
        echo " ===== INFORMAÇÔES MOUSE 2 ===== <br/>";
        print_r($m2); 
        $m2->clicar();
       
        
        ?>
    </body>
</html>
