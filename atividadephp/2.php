<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
	if(isset($_POST["NUMERO"])){
		$NUMERO = $_POST["NUMERO"];
		if(!is_numeric($NUMERO)){
			
			echo "não numerico.";
		}
		if($NUMERO > 0){
			echo " Este numero é positivo: " .$NUMERO;
		}
		elseif ($NUMERO < 0) {
			echo "Este numero é negativo: ".$NUMERO;
		}
		else{
			echo "este numero é ZERO";
		}
	}
?>

	<form method="post">
		<input type="text" name="NUMERO">
		<input type="submit">
	</form>

	<H3>UM ERRO QUE NÃO CONSEGUI ARRUMAR FOI QUANDO VOCE DIGITA UMA LETRA, ELE IMPRIME NA TELA: "ESTE NUMERO É ZERO". MESMO ESPECIFICANDO QUE AQUELE CAMPO É DO TIPO NUMERICO. :/ </H3>
	

</body>
</html>
