<?PHP

$numero=526;
$UnoADiez=array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve");
$Decenas=array("dieci","veinti","treinta y ","cuarenta y ","cincuenta y ","sesenta y ","setenta y ","ochenta y ","noventa y ");
$OnceAQuince=array("once","doce","trece","catorce","quince");
$Centenas=array("ciento","doscientos","trescientos","cuatrocientos","quinientos","seiscientos","setecientos","ochocientos","novecientos");

if ($numero>=100){
	echo $Centenas[round($numero/100)-1]." "; 
	$numero=$numero%100;
	}
if ($numero>=10){
echo number_format(($numero/10),0);
	echo $Decenas[number_format(($numero/10),0)-1];
	$numero=$numero%10;
	}

	

?>