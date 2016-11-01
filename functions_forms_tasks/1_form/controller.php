<?php

if(isset($_POST['text1']) and isset($_POST['text2']) and isset($_POST['sub'])){

    $a=$_POST['text1'];
    $b=$_POST['text2'];


    function getCommonWords($a, $b){

        $arr[0] = $a;
        $arr[1] = $b;

        foreach($arr as $value)
        {
            echo $value, "<br>";
        }

    }

    getCommonWords($a, $b);
}
else
?>