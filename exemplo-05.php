<?php

$hierarquia =array(


      array(
      	'nome_cargo'=>'CEO',
      	'subordinados'=>array(
        //Inicio Diretor Comercial

        		array(
                 'nome_cargo'=>'Diretor Comercial',
                 'subordinados'=>array(
                 	//Inicio Gerente de Vendas

                 	array(
                 	'nome_cargo'=>'Gerente de Vendas'

                 			)
                 		 //Termino Gerente de Vendas
                 )

        		),
        		//Termino Diretor Comercial

        //Inicio Diretor Financeiro
        		array(
        		'nome_cargo'=>'Diretor Financeiro',
        		'subordinados'=>array(

                 array(
                 //Inicio Gerente contas a pagar
                 'nome_cargo'=>'Gerente contas a pagar',
                 'subordinados'=>array(
                 	//Inicio Supervisor de pagamentos
                 	

                 	array(
                 	'nome_cargo'=>'Supervisor de pagamentos'

                 	)
                 	//Termino Supervisor de pagamentos

                 )

                 ),
                 //Termino Gerente de contas a pagar

                 //Inicio Gerente de compras


                 array(
                 	//Inicio Gerente de compras
                 	'nome_cargo'=>'Gerente de compras',
                 	'subordinados'=>array(

                 		//Inicio Supervisor de compras
                 		array(
                 		'nome_cargo'=>'Supervisor de compras',
                 		'subordinados'=>array(

                 			//Inicio Secretaria
                 		array(
                 		'nome_cargo'=>'Secretaria'



                 		  )
                 		//Termino Secretaria

                 		 )


                 	   )
                 		//Termino de Supervisor de compras


                 	)

                  )
                //Termino Gerente de compras

               )

            )
        	//Termino Diretor Financeiro
      	)



   )


);


function exibe($cargos){




$html = '<ul>';


foreach($cargos as $cargo) {



	$html .= "<li>";
	$html .= $cargo['nome_cargo'];


	if (isset($cargo['subordinados']) &&count($cargo['subordinados']) >0){



			$html .= exibe($cargo['subordinados']);

	}


    $html .="</li>";


}




$html .= '</ul>';

return $html;




}


echo exibe($hierarquia);




















?>