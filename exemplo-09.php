<?php

class Dados {

public $nome = "João";
public $idade = "90";
public $logradouro = "Rua Souto - 7686 - Ipanema";
private $cpf = "0553464567";



public function exibeDados() {


  echo $this->nome . "<br/>";
  echo $this->idade . "<br/>";
  echo $this->logradouro . "<br/>";
  echo $this->cpf . "<br/>";


}



}

class Pessoas extends Dados{








}


$informacoes = new Pessoas();

$informacoes->exibeDados();

?>