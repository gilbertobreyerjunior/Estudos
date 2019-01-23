<?php
//Recebe o nome da classe que está sendo chamada 
//Quando for executado o autoload nós vamos receber no nome dessa classe o nome do namespace\ e o nome da classe , 
//No caso desse autoload estamos passando uma função anonima
spl_autoload_register(function($nameClass){

           //Mostrar o tipo de dado
         var_dump($nameClass);

          //Qual a pasta onde deve procurar as nossas classes que no caso falamos que é a class 
	//Criamos uma variavel que representa o Diretorio de classes e recebe o nome da nossa pasta que é class
		$dirClass = "class";
        //Criamos a nossa variavel Filename e vai receber o meu $dirClass que contém minha pasta "class"  e concatenamos com a barra utilizando o DIRECTORY_SEPARATOR  e concatenado com a classe que passamos no parâmetro concatenado com a extensão do arquivo .php
        $filename = $dirClass . DIRECTORY_SEPARATOR  .  $nameClass . ".php";

         //Fizemos o teste para verificar se o arquivo existe
         if (file_exists($filename)) {
     
             //Se ele existir já traz com o file_once
             require_once($filename);

         }



});


?>