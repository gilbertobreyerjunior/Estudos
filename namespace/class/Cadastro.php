<?php

//Sempre manter o padrão com o nome da classe com a primeira letra maiuscula
class Cadastro {


 private $nome;
 private $email;
 private $senha;

  public function getNome():string
  {
       //O $this-> Estou chamando o atributo nome que voce declarou
      return $this->nome;

  }

  public function getEmail():string
  {
      //O $this-> Estou chamando o atributo email que voce declarou
    return $this->email;

  }

  public function getSenha():string
  {

    //O $this-> Estou chamando o atributo senha que voce declarou
    return $this->senha;

  }


  public function setNome($nome)
  {
      //Chamo o atributo nome e ele recebe o parâmetro $nome
   $this->nome = $nome;

  }

  public function setEmail($email)
  {
    //Chamo o atributo email e ele recebe o parâmetro $email
  $this->email = $email;

  }

    
 public function setSenha($senha)
 {
    //Chamo o atributo senha e ele recebe o parâmetro $senha
   $this->senha = $senha;

 }

    //Quando queremos transformar um objeto em string utilizamos o __tostring
  public function __toString(){

      //Quando fazemos um json_encode tem que ser de um array,
      // O json não é nada mais que um array que voce pode ver, chamamos de array seliarizado o json não deixa de ser uma string __toString()

      return json_encode(array(
          //Padrão chave e valor  o valor é o nome e a chave é o $this
          //Chamo cada atributo  e invoco os meus get
        //Nesse caso estamos pedindo para trazer o nome,e-mail e senha
        "nome"=>$this->getNome(),
        "email"=>$this->getEmail(),
        "senha"=>$this->getSenha()


      ));


    }

}


?>