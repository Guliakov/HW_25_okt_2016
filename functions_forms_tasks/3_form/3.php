<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
    Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>


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

<style>
    #dva {
        width: 6em;
    }
</style>
<form action='control.php' method="POST">




    <input type="number" min="0" max="20" step="1" name="dva" placeholder="до 20"required/ ><br><br/>
    <br/>
    <input type='submit' name="sub">

</form>




</body>
</html>