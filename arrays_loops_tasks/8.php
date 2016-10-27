<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
    '­1­2­3­4­5­6­7­8­9­'.

    <br>
    <br>
<?php
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
//array ();

foreach ($arr as $s=>$value) {

    echo "-$value";
}
    echo "-";
//print_r($arr);
?>