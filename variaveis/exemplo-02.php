<?php
    
    //Aula de variáveis
    $anoNascimento = 1998;
    $nomeCompleto = "Thiago Freitas";
    /* Comentario em php */
    
    $tudo = $nomeCompleto . " " . $anoNascimento;
    
    echo $tudo;
    exit;
    
    echo $nomeCompleto;
    echo "</br>";

    unset($nomeCompleto);

    if(isset($nomeCompleto)){
        echo $nomeCompleto;
    }

    /* unset apaga o conteudo da variável
    if(isset...){} verifica se a variavel é vazia
    exit - php para de executar
    Concatenação é com .     
    */

?>