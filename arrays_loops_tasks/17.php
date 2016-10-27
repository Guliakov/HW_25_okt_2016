<p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
<br>
<br>
<?php

$month="feb";
$arr=array("jan", "feb", "mar", "apr", "may",);
foreach ($arr as $s=>$volume){


    if ($volume==$month){
        echo "<b>$month</b><br>";}

        else {
    echo "$volume<br>";}
}    // не работает

?>