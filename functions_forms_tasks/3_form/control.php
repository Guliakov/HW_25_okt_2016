<?php

if (isset($_POST['sub']) and isset($_POST['dva'])) {

    $n = $_POST['dva'];

    include 'user.txt';
    include 'new_user.txt';

    $lenght_world=$_POST['dva'];
//$lenght_world=4;
    $file=file_get_contents('user.txt');//Читает содержимое файла в строку
    $arr=(explode(' ',$file)); //Возвращает массив строк, полученных разбиением строки string
//print_r($arr);
    for ($i = 0; $i < count($arr); $i++) {
        //echo mb_strlen($arr[$i])." =  $arr[$i]\n ";
        if (mb_strlen($arr[$i])==$lenght_world)//возвращает количество символов в строке и сравнивает
             {
            unset($arr[$i]);
        }
    }
    file_put_contents('new_user.txt',implode(" ", $arr));












    /*  $words = explode(" ", user.txt); //разбиваем строку на слова и созд массив


       $string = serialize($_POST);
       $f = fopen('users.txt', 'a');
       fwrite($f, $string . PHP_EOL);
       fclose($f);




       setlocale(LC_ALL,"rus");
       preg_replace('/\b([а-яё\w]{$n,})\b/i', '', user.txt);
      // usort($words, function ($a, $b) {
           // return mb_strlen($a) <=> mb_strlen($b); // PHP7
     //      return mb_strlen($b) - mb_strlen($a);
     //  });
       echo '<pre>';
      // print_r (array_slice($words, 0, 3));
      //print_r($words);
       print_r(user.txt);

   */
}
?>