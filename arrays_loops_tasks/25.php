<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</p>
<br>
<br>
<?php

for($i=0;$i<5;$i++){$arr[]=rand(0,10);}

$n=max($arr);
$m=min($arr);

// или var_damp($arr) покажет все
print_r($arr);
echo "<br>";
echo "$n"." - максимальное значение";
echo "<br>";
echo "$m"." - минимальное значение";

echo "<br>";

$key = array_search($n, $arr);;
echo "ключ макс - " . "$key<br>";
$key1 = array_search($m, $arr);;
echo "ключ мин - " . "$key1<br>";
echo "<br>";

// Меняем местами нулевое и четвертое значения массива
list($arr[$key], $arr[$key1]) = array($arr[$key1], $arr[$key]);

print_r($arr);
?>