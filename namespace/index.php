<?php
//Primeiro passo
//Fazemos o require_once do arquivo de configuração, que ele vai trazer o arquivo config.php
require_once("config.php");

//Penultimo passo
//Usando um namespace - Estou usando a namespace Cliente que possui a classe Cadastro, Estou dizendo que a classe cadastro nesse meu ambiente vai ser a classe que está no meu namespace que realmente está na pasta Cliente
use Cliente\Cadastro;


//Segundo passo
//Criamos um objeto da classe Cadastro 	que é la da minha classe cliente
$cad = new Cadastro();
//Definimos o valor dos atributos abaixo invocando as funções Set de definir

//Terceiro passo
$cad->setNome("Gilberto Breyer Júnior ");
$cad->setEmail("gbj_rs@hotmail.com");
$cad->setSenha("12345678");

//Como o nosso objeto sabe virar uma string pois ele tem um método mágico chamado __toString()
//Nesse momento o __toString está sendo invocado
//echo $cad;

//Último passo
//Invoco o meu método que foi criado lá no Cadastro.php pasta Class e da subpasta Cliente
$cad->registrarVenda();

?>