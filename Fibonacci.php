<?PHP

$num1=0;
$num2=1;
$numsig=$num1+$num2;

echo "$num1, $num2, ";

while (($num1+$num2)<=10000) {
	$numsig=$num1+$num2;
	
	if(($numsig+$num2)<=10000){
		echo "$numsig, ";
	}
	else {
		echo "$numsig.";
	}
	$num1=$num2;
	$num2=$numsig;
}

?>