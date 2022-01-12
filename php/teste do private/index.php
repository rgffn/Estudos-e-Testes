<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Classes e Objetos </title>
    </head>
    <body>
        <pre> 
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta; 
    
        $c1->modelo = "BIC cristal"; 
        $c1->cor = "Azul";
        
        //var_dump($c1)
        $c1->tampar();
        print_r($c1);
        
       $c1->rabiscar();
        
        
        ?>
        <pre/>
    </body>
</html>
