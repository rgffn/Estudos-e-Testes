<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        /*
        $c1 = new Caneta(); 
        $c1->setModelo("Bic"); 
        // $c1-> modelo = "Bic"; 
        
        $c1->setPonta(0.5);
         
         */
        $c1 = new Caneta("Bic", "Azul", 0.5);
        print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
    
        print_r($c1); 
        
        ?>
        </pre> 
    </body>
</html>
