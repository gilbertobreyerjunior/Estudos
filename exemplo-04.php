<?php


$a = 40;

//Quando você usar o & em um parâmetro, você está dizendo para a váriavel em seguida $b que ele vai asumir o valor de $a
function trocaValor(&$b){
     
	 $b += 50;
    // Retorna o valor da soma 60
      return $b;


}


//Imprime a minha função
 echo trocaValor($a);
 echo "<br>";
 //No caso imprime o valor do meu $a alterado
 echo $a;
?>