<!DOCTYPE html>
<html>
<body>

<?php 
echo "PHP homework2 : sorting <br><br>" ;

$n = 30;
for($x = 0; $x < $n; $x++) {
    $data[$x] = rand(0, 100);
    echo " $data[$x] ";
}
echo "<br>";

sort($data)[$x];

  for($x=0; $x<$n; $x++) {
    echo " $data[$x] ";
  }
  echo "<br>";

?>  

</body>
</html>