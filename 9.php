<?php
$minha_multa['carro'] = 'Pálio';
$minha_multa['valor'] = 178.00;
$minha_multa['carro'] .=' ED 1.0';
$minha_multa['valor'] += 20;

/*
var_dump($minha_multa);
*/
echo '<br>';
$comidas[] = 'Lazanha';
$comidas[] ='Pizza';
$comidas[] = 'Macarrão';
$comidas[1] = 'Pizza Calabreza';
/*
var_dump($comidas);
*/
foreach ($minha_multa as $carro=> $valor) {
	echo 'O carro ' . $carro .' ' . $valor .' tem multas.<br>';

}

?> 

