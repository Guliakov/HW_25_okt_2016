<p>4. Написать функцию, которая выводит список файлов в заданной директории.
    Директория задается как параметр функции.</p>


<?php

    $dir= '/Applications/XAMPP/htdocs/functions_forms_tasks';

   function dir_out($dir){

    $files1 = scandir($dir);

       foreach ($files1 as $value){

           echo  "$value<br>";
       }

   // print_r($files1);
}
    dir_out($dir);
?>