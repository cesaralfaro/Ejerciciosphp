<?PHP

$numero=999;
$UnoADiez=array("cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve");
$Decenas=array("dieci","veinti","treinta y ","cuarenta y ","cincuenta y ","sesenta y ","setenta y ","ochenta y ","noventa y ");
$DiezAQuince=array("diez","once","doce","trece","catorce","quince");
$Centenas=array("ciento","doscientos","trescientos","cuatrocientos","quinientos","seiscientos","setecientos","ochocientos","novecientos");

if ($numero>=100){
	echo $Centenas[floor($numero/100)-1]." "; 
	$numero=$numero%100;
}
if ($numero>=10){
	if ($numero<=15){
		echo $DiezAQuince[$numero-10];
	}
	else{
	echo $Decenas[floor($numero/10)-1];
	$numero=$numero%10;
	}
}
if ($numero<10) {
	echo $UnoADiez[$numero];
}
	

?>