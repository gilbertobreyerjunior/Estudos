<?php
//Terceiro passo
//Para seguirmos um padrão de organização informamos o namespace da pasta que no caso é Cliente
namespace Cliente;
  
//Primeiro passo

   //Eu digo que essa minha classe ela estende da minha classe cadastro principal ela herda
 //Só que temos que informar ao Php que essa classe está em um namespace, 

//Pois colocamos em subpastas e ele não entende isso se não colocarmos o namespace.
// Se eu simplesmente só informar cadastro ele vai estender da própria classe cadastro que está na minha pasta.              \\Utilizando a \Cadastro = Volte na raiz. Ele vai dizer para voltar lá para raiz do meu projeto nas minhas classes e pega o cadastro que está lá

//Segundo passo utilizando o extends
//Quarto passo Informo um \ para voltar a pasta class raiz e pegar o cadastro que está lá e irá herdar tudo o que já tem lá
class Cadastro extends \Cadastro {  


        public function registrarVenda(){

             //Pego o getNome que é estendido lá da classe cadastro raiz
        	echo "Foi regristrada uma venda para o cliente ".$this->getNome();
        }



}


?>