<?PHP

$numero=97;

if ($numero==1) {
	echo "El numero $numero no es primo";  //El 1 no es primo aunque sí cumple la condición matemática para serlo
	}

for($i=2;$i<=$numero;$i++) {

	if ($i==$numero) {
	echo "El numero $numero es primo";  //Si llego a dividir por si mismo es que no he encontrado ningun otro entero mayor de 1 por el que sea divisible
	}
	
	elseif($numero%$i==0) {
	echo "El numero $numero no es primo ya que es divisible, al menos, por $i"; //Si encuentro un divisor mayor que 1 y que no es el propio número, es que no es primo
	break;
	}
}
	
?>

