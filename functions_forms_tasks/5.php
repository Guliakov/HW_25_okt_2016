<p>5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
    Директория и искомое слово задаются как параметры функции.</p>
<?php
$dir='/Applications/XAMPP/htdocs/functions_forms_tasks';
$a='control';


function name_scan_file($dir, $a)
{
    $entries = scandir($dir);
$filelist = array();
foreach($entries as $entry) {
    if (strpos($entry, $a) === 0) {
        $filelist[] = $entry;
        //print_r($filelist);
        echo '$entry<br>';
    }
}
} name_scan_file($dir, $a);


?>