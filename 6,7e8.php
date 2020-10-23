<?php
$pacientes = array(
'Joana'=>20,
'Rui'=>25,
'Ana'=>30,
'Pedro'=>24,
'Carla'=>23,

);

echo 'Idade do paciente Joana' . $pacientes['Joana'] . ' anos. ';

foreach ($pacientes as $nome => $Idade) {
	echo 'O paciente ' . $nome . ' tem ' . $Idade . 'anos.<br>';
}
?>


