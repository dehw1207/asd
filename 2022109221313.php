<!DOCTYPE html>
<html>
<body>

<?php
echo "2번 문제 <br><br>";

$n = intval(readline("정수를 입력해 주십시오 : "));

$random_numbers = array();
for ($i = 0; $i < $n; $i++) {
  $random_numbers[] = rand(10, 100);
}

sort($random_numbers);

echo "정렬: ";
foreach ($random_numbers as $num) {
  echo $num . " ";
}
echo "<br><br>";

?>  

</body>
</html>


