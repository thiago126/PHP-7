<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Thiago Freitas");
$cad->setEmail("tnf.98@hotmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

 ?>