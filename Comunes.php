<?PHP

$num1=72;
$num2=50;
$num3=20;

function descomponer($cantidad){

	for($i=2;$i<=$cantidad;$i++){
		$descomposicion[$i]=0;
	}

	$divisor=2;

	while($cantidad>1){
		if(($cantidad%$divisor)==0){
			$descomposicion[$divisor]++;
			$cantidad=$cantidad/$divisor;
		}
		else{
			$divisor++;
		}
	}

	return $descomposicion;
}

$Factores1=descomponer($num1);
$Factores2=descomponer($num2);
$Factores3=descomponer($num3);

$MCD=1;
for($i=2;$i<=min($num1,$num2,$num3);$i++){
	$MCD=$MCD*pow($i,min($Factores1[$i],$Factores2[$i],$Factores3[$i]));
}

echo "El Maximo Comun Divisor de $num1, $num2 y $num3 es $MCD <br>";


$mcm=1;
for($i=2;$i<=max($num1,$num2,$num3);$i++){
	if ($i>$num1){
		$Factores1[$i]=0;
	}
	if ($i>$num2){
		$Factores2[$i]=0;
	}
	if ($i>$num3){
		$Factores3[$i]=0;
	}

	$mcm=$mcm*pow($i,max($Factores1[$i],$Factores2[$i],$Factores3[$i]));
}

echo "El minimo comun multiplo de $num1, $num2 y $num3 es $mcm";

?>