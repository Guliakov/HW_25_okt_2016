<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
    индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
    индекс.</p>
<br>
<br>
<?php

for($i=0;$i<15;$i++){$arr[]=rand(0,100);}

print_r($arr);

$n=1;

foreach ($arr as $key=>$value){
    if ((($key%2==0)and($key!=0)) and ($value>0)){
    $n *=$value;
    }
}
echo "<br>произведение положительных эл-тов c парными индексами, - "."$n<br>";

echo "Положительные элементы с нечетным индексом<br>";

foreach ($arr as $key=>$value){
    if (($key%2==1) and($value>0)){
        echo "$value<br>";
    }

}
?>