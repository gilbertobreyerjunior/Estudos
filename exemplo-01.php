<form>


  Nome completo<input type="text" name="nome"> <br> 
 Idade <input type="text" name="idade"> <br> 
Nascimento <input type="date" name="nascimento">  <br> 
E-mail <input type=email name="email"> <br>
<input type="checkbox" name="Computador"> Tenho desktop <br>
<input type="checkbox" name="notebook"> Tenho notebook <br>
<input type="checkbox" name="tablet"> Tenho tablet <br> <br>

<input type="radio" name="sexo" value="Masculino"> Masculino
<br>
<input type="radio" name="sexo" value="Feminino"> Feminino <br>
<input type= "submit" value="Send"> <br>
<input type="reset" name="BTApaga" value=Limpar> <br>

</form>
<?php
//Faz um if isset para não dar o erro de campos não defido o notice
if (isset($_GET)) {

//Percorre o nosso $_GET array super global
//$key chave dos nossos inputs nome dos nossos campos que estiverem no formulário
	//Exemplo nome, nascimento


	//Faz o foreach em cada 

// A chave dos campos que estiverem no formulário vao setar os valores
//E tudo o que a pessoa digitar nos vamos vai vir em $value

foreach ($_GET as $key => $value) {

echo "Nome do campo: " . $key . "<br>";
echo "Valor do campo:" . $value . "<br>";
//Para escrever uma linha na horizontal
echo "<hr>";





  }


}




?>