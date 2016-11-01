<p>10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
    Текст должен вводиться с формы.</p>

<?php

if (isset($_POST['name']) and isset($_POST['sub'])) {

    function unic_words()
    {
        $text = $_POST['name'];

        function getUniques($text, &$nOrigWords = false)
        {
            // Сначала получаем все слова в тексте.
            $words = preg_split("/([^[:alnum:]]|['-])+/s", $text);
            $nOrigWords = count($words);
            // Затем приводим слова к нижнему регистру.
            $words = array_map("mb_strtolower", $words);
            // Получаем уникальные значения.
            $words = array_unique($words);
            return $words;
        }


    }
}

            getUniques($text);





        /*
        $num = count(array_unique($words));

        //echo "$num<br>";

        //$nums = array_count_values($words); //сколько раз встречается каждое слово
       // $uwords = array_unique($words);

       echo "Количество уникальных слов". "$num<br>";
       // foreach ($uwords as $uword) {


        //    echo "Список уникальных слов"."$uwords<br>";
print_r($num);
        }

    unic_words();*/



?>