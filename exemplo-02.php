<?php
//Como podemos aplicar uma regra onde se a variável $status for verdadeira, a variável $liberado receba o valor 1, senão $liberado deve receber 0 ?

$status = true;


if ($status==true)
{
$liberado = 1;
echo $liberado . "";
} else

{
    echo $liberado . "";
	$liberado =0;
}


?>