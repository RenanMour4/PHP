<?php





for($contador = 0; $contador <=10; $contador++):
	 echo "8 x $contador = ". ($contador*8) . "<br>";
	endfor;
echo "<hr>";


for($contador = 0; $contador <=10; $contador++):
	 echo "o contador é $contador <br> ";
	endfor;
echo "<hr>";

$cores = ['azul','vermelho','laranja','verde'];

foreach ($cores as $indice => $valor) :
	echo $indice, "-".$valor. "<br>";

endforeach;

?>