<?PHP

$Cantidad=98;

$TipMoneda=array(500,200,100,50,20,10,5,2,1);
$i=0;
$EsaMoneda=0;

while($Cantidad>=1){
	while($Cantidad>=$TipMoneda[$i]){
		$EsaMoneda++;
		$Cantidad=$Cantidad-$TipMoneda[$i];
		}
	if($EsaMoneda!=0) {
		echo "Devuelvo $EsaMoneda de $TipMoneda[$i]<br>";
		$EsaMoneda=0;
	}	
	$i++;
	}

?>