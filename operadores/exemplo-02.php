<?php
    
    //Operadores de incremento

    $valorTotal = 0;
    
    //Operador de soma na mesma variavel
    $valorTotal += 100;
    $valorTotal += 25;

    echo $valorTotal;

    //Operador de subtação na mesma variavel
    $valorTotal -=10;

    echo "</br>" . $valorTotal;
    
    //Operador de multiplicação na mesma variavel
    $valorTotal *=10;

    echo "</br>" . $valorTotal;

    //Operador de multiplicação também pode ser usado porcentagem
    $valorTotal *=.9;
    //Sempre coloque a porcentagem do numero que você quer e não o quanto vai tirar. Nesse exemplo são tirados 10%.

    echo "</br>" . $valorTotal;

    //Operador de divisão na mesma variavel
    $valorTotal /=10;

    echo "</br>" . $valorTotal;
    
?>
