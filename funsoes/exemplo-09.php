<?php
 //"array bidimencional" é quando se tem um "array" dentro de outro.
$hierarquia = array(
     
    array(
     'nome_cargo' => 'CEO',
     'subordinado' => array(
     	array(
     		'nome_cargo' => 'Dirertor Comercial',
     		'subordinado' => array(
     			array(
     				'nome_cargo' => 'gerente de vendas',
     				'subordinado' => array(
     					array('nome_cargo' => 'funcioário'
     					     )
     				     )
     			     )
     		     )
     	     ),
             array(
             'nome_cargo' => 'presidente',
     		'subordinado' => array(
     			array(
     				'nome_cargo' => 'chefe superior',
     				'subordinado' => array(
     					array('nome_cargo' => 'secretária'
     					     )
     				     )
     			     )
     		     )	
             )
         )
    )
);

function exibe ($cargos){

	$html = '<ul>';

	   foreach ($cargos as $cargo) {
		      $html .= "<li>";
		      $html .= $cargo['nome_cargo'];

		      if (isset($cargo['subordinado']) && count($cargo['subordinado'])> 0)  {
			     $html .= exibe($cargo['subordinado']);
			     $html .= "</li>";
		          }
	    }
	$html .'</ul>';

	return $html;
}

echo exibe ($hierarquia);



