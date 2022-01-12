<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        
        $p1 =  new Pessoa("Parda", 1.70, "Robert", "São Paulo"); 
        
        print "Pessoa com o nome {$p1->getNome()} e mora na cidade de {$p1->getCidade()} da cor {$p1->getCor()} \n" ; 
        print_r($p1); 
     
        
        ?>
        </pre>
    </body>
</html>
