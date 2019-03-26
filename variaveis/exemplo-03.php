<?php
    
    //No php, as aspas usadas em uma string pode ser simples ou dupla.
    $nome = "Udemy";
    $site = 'www.udemy.com';
    
    //int, assim como no java não usa aspas.
    $ano = 2019;
    
    //double é a mesma regra do int.
    $salario = 5500.99;
    //boolean é sem aspas e definido por false true;
    $bloqueado = false;
    
    /*------------------------------------------------------------------------*/
    
    $marcas = array("samsung", "apple", "lg", "philips");
    
    //assim como no java os indices dos arrays começam no 0.
    //Então um array de tamano 4 o indice é de 0 a 3.
    echo $marcas[1];

    $nascimento = new DateTime();
    
    echo "</br>";
    
    //mostra detalhadamente a variável
    var_dump($nascimento);
    
    //echo $nascimento;

    /*------------------------------------------------------------------------*/
    
    $arquivo = fopen("exemplo-03.php", "r");

    echo "</br>";
    
    var_dump($arquivo);


    

?>