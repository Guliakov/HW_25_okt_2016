<?php
if (isset($_POST['text']) and isset($_POST['sub'])){

   $t=$_POST['text'];


    function perev($t){

    echo strrev($t); // выводит "!dlrow olleH"
}
}
    perev ($t);
?>