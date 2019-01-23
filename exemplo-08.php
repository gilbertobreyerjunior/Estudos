<?php

class Pessoa {


	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

//Como é um método publico ele consegue chamar tudo que é publico,protegido e privado.
	public function verDados() {


		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";




	}


}




      //A classse Programador estende de Pessoa
      //Estamos dizendo que a classe Programador vai estender tudo que tem na classe pessoa
//Será possível visualizar nome, idade, senha
class Programador extends Pessoa {
//Atributo privado dentro da classe Programador
private $senha = "95959595";
private $endereco = "Rua Niteroi - 4545, Ipanema";

//Será chamado o método verDados da classe Programador
public function verDados() {
 
  
 //Para ver se está chamando o verDados da classe Pessou o da classe Programador
    //Ela espera um objeto, voce passa um objeto para essa função, e ela diz qual classe que foi feita a instância desse objeto
    //Dentro da própria classe o nosso objeto é a variável $this
	echo get_class($this) . "<br/>";

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
		echo $this->endereco . "<br/>";




	}


}



//Foi criado o objeto programador = Criada a instância
$objeto = new Programador();


//Invoca a função verDados do método programador
$objeto->verDados();

?>