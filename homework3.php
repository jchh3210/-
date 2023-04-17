<?php
$prev = 0;
$current = 1;

for($i = 1; $i <= 6; $i++) {
    $ratio = ($prev == 0 && $i <= 2) ? 1 : $current / $prev;
    echo $i." ".$current," ".$ratio."<br>";
    $next = $prev + $current;
    $prev = $current;
    $current = $next;
}
?>


<?PHP

function fibo($num)
{
if($num ==  0 || $num ==1) return (1);
return (fibo($num -1) + fibo($num -2));
}
for ($i=1; $i <= 20; $i++)
print(fibo($i - 1))." ";

?>

 

<?php

 $a = 1;
 $b = 1;
 $num = 20;
 
 for($i = 0; $i < $num; $i++)
 {
 $c = $b +$a;
 echo $a." ";
 $a = $b;
 $b = $c;
 }

?> 

