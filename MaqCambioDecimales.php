<?PHP

$Cantidad=1.22;

$TipMoneda=array(500,200,100,50,20,10,5,2,1,0.50,0.20,0.10,0.05,0.02,0.01);
$i=0;
$EsaMoneda=0;

while($Cantidad>=0.01){
	while($Cantidad>=$TipMoneda[$i]){
		$EsaMoneda++;
		$Cantidad=number_format($Cantidad-$TipMoneda[$i],2);
		}
	if($EsaMoneda!=0) {
		echo "Devuelvo $EsaMoneda de $TipMoneda[$i]<br>";
		$EsaMoneda=0;
	}	
	$i++;
	}

?>