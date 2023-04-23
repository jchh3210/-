<!DOCTYPE html>
<html>
<body>

<?php 
echo "PHP homework1 : Sum, Factorial<br><br>" ;

$n = 30;
$sum = 0;
$prod = 1;
$prod2 = 1;

for ($prod = 0, $sum = 0, $n = 30; $prod <= $n; $prod++) {
	$sum = $sum + $prod;
}

for ($prod = 1; $prod <= $n; $prod++) {
	if ($prod < $n)
    	echo "$prod + ";
    elseif ($prod == $n)
    	echo "$prod";
    
}
echo " = $sum <br><br>";

for ($prod2 = 1, $multiple = 1, $n = 30; $prod2 < $n; $prod2++) {
	$multiple = $multiple * $prod2;
}

for ($prod2 = 1; $prod2 <= $n; $prod2++) {
	if ($prod2 < $n)
    	echo "$prod2 * ";
    elseif ($prod2 == $n)
    	echo "$prod2";
}

echo " = $multiple <br><br>";
?>  

</body>
</html>