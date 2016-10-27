<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
    помощью второго — столбец элементов.</p>
<br>
<br>
<?php
$arr=array('html', 'css', 'php', 'js', 'jq');
//array ();
echo "ключи: <br>";
foreach ($arr as $s=>$value) {

    echo "$s <br>";
}
?>
<br>
<br>
<?php
echo "элементы: <br>";
foreach ($arr as $s=>$value) {

    echo "$value <br>";
}

//print_r($arr);
?>