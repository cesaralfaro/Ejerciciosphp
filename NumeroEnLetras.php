<?PHP

$numero=6784920;

function LeeNumero($cantidad) {

$UnoADiez=array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve");
$DiezAQuince=array("diez","once","doce","trece","catorce","quince");
$Decenas=array("dieci","veinti","treinta y ","cuarenta y ","cincuenta y ","sesenta y ","setenta y ","ochenta y ","noventa y ");
$DecenasExactas=array("veinte","treinta","cuarenta","cincuenta","sesenta","setenta","ochenta","noventa");
$Centenas=array("ciento","doscientos","trescientos","cuatrocientos","quinientos","seiscientos","setecientos","ochocientos","novecientos");

	if ($cantidad>=100){
		if($cantidad==100){  //Si es 100 exacto se lee cien y no ciento
			echo "cien";
		}
		else{
			echo $Centenas[floor($cantidad/100)-1]." "; 
			$cantidad=$cantidad%100;
		}
	}
	if ($cantidad>=10 && $cantidad<100){
		if ($cantidad<=15){						//Entre 10 y 15 se leen diferente
			echo $DiezAQuince[$cantidad-10];
		}
		elseif ($cantidad%10==0){				//Para numeros con unidades igual a cero se lee diferente
			echo $DecenasExactas[$cantidad/10-2];
		}
		else {
			echo $Decenas[floor($cantidad/10)-1];
			$cantidad=$cantidad%10;
		}
	}
	if ($cantidad>0 && $cantidad<10) {
		echo $UnoADiez[$cantidad-1];	
	}
}

if($numero==0){
	echo "cero";
}

if($numero>999999){
	$millones=floor($numero/1000000);
	$numero=$numero-$millones*1000000;
	if($millones==1){
		echo "un millon ";
	}
	else{
		LeeNumero($millones);
		echo " millones ";
	}
}

if ($numero>999){
	$miles=floor($numero/1000);
	if($miles>=2){
		LeeNumero($miles);
	}
	echo " mil ";
	$numero=$numero-$miles*1000;
}

LeeNumero($numero);


?>