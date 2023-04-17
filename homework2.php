<?php
$n = 30;
for($i=0; $i<$n; $i++){
  $data[$i] = rand(10,100);
}
echo "생성된 랜덤넘버: ";
print_r($data);
sort($data);
echo "<br> 소팅된 결과: ";
print_r($data);
?>