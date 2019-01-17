<?php


//Primeiro encapsulamento é o public =Estou dizendo que ele é publico

 class Pessoa {

public $nome; //Atributo
public $cpf; //Atributo
public $nascimento; //Atributo
public $resultado;



public function somar($salarioA, $salarioB)
    {
        return $salarioA + $salarioB;
 			$resultado = somar(1000, 2000);
    		

    }
 
    





public function falanome() { //Método pois é uma função de uma classe

                     //Quero acessar o meu atributo nome porque ele está na classe Pessoa  
	                  //$this É a representação da nossa classe já instanciada, se eu quiser fazer referencia como no exemplo de um atributo eu faço $this->nome; Sem o $

return "O meu nome é: ".$this->nome;



   }


   public function falacpf() {


 return "Meu Cpf é: ".$this->cpf;

   }

   public function falanascimento() {

 return "Meu nascimento é: ".$this->nascimento;



   }

public function falasalario() {


return "Meu salario total é: ".$this->somar;



}



}


//$gilberto recebe tudo da classe pessoa
//Crio uma variavel gilberto que é igual ao método construtor new Pessoa() 
//Criei um objeto do tipo pessoa
//E tudo pessoa tem o 
$gilberto = new Pessoa();
$cpf = new Pessoa();
$nascimento = new Pessoa();
$salario = new Pessoa();

//Setando o nome na memória =  Gilberto Breyer Junior
$gilberto->nome = "Gilberto Breyer Junior";
$cpf->cpf = "435345465564";
$nascimento->nascimento = "18-06-1990";
//$salario->somar = "" ;


//Após chamo o método
//O meu objeto está chamando o método da classe pessoa
echo $gilberto->falanome();
echo "<br>";
echo $cpf->falacpf();
echo "<br>";
echo $nascimento->falanascimento();
echo "<br>";
echo $salario->somar();
//echo $salario->falasalario();

?>