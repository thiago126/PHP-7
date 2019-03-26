<?php
    
    //Retorna os valores da url
    $nome =$_GET["usuario"];
    var_dump($nome);
    echo "</br>";

    $id =(int)$_GET["id"];
    var_dump($id);
    echo "</br>";
    
    //Retorna o IP do provedor do usuário.
    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip;
    echo "</br>";

    //Retorna qual url o usuario está acessando.
    $ip2 = $_SERVER["SCRIPT_NAME"];
    echo $ip2;
    echo "</br>";

    
    
?>