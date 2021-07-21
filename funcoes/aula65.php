<?php
function somatudo(){

	$lista = func_get_args();
	$qntd = func_num_args();
	$total = 0;

//	for ($x=0; $x < $qntd ; $x++) { 
//		$total += $lista[$x];
//	}

	foreach ($lista as $item ) { 
		$total += $item;
	}

	
	echo "A soma de todos os Parametros é: " . $total;
}

somatudo(1,2,3,4,5,6,7,8,9,10)
?>