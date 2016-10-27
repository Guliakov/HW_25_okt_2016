<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
    С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>
<br>
<br>
<?php
$arr=array(26, 17, 136, 12, 79, 15);

$result=0;
foreach ($arr as $s=>$value) {


    $result=$result+pow("$value", 2);



}
echo "$result";
//print_r($arr);
?>