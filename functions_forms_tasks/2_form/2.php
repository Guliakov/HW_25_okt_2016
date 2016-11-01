<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
    Реализовать с помощью функции.</p>

<?php include('control.php');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action='control.php' method="POST">

    <textarea rows= "4" cols= "45" name="text1" placeholder="введите текст"></textarea><br>
    <br/>
    <input type='submit' name="sub">

</form>


</body>
</html>