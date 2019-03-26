<?php

    $nome = "Thiago";

    function teste1(){
        global $nome;
        echo $nome;
    }

    function teste2(){
        $nome = "Thiagão";        
        echo "</br>" . $nome . " agora no teste dois";
    }
    //Escopo é o que tem dentro da function
    //global

    teste1();
    teste2();


?>