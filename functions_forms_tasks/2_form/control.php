<?php
if (isset($_POST['text1']) and isset($_POST['sub'])) {
    $at = $_POST['text1'];

        // $text = 'один одинадцать стоодинадцать тысячаодинадцать тысячастоодинадцать '.
        //     'десятьтысячстоодинадцать миллионстотысячстоодинадцать';
        $words = explode(" ", $at); //разбиваем строку на слова и созд массив
        usort($words, function ($a, $b) {
            // return mb_strlen($a) <=> mb_strlen($b); // PHP7
            return mb_strlen($b) - mb_strlen($a);
        });
        echo '<pre>';
        print_r (array_slice($words, 0, 3));

}



?>