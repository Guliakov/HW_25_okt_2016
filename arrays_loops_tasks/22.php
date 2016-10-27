<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p>
<br>
<br>
<?php

$str = '';
for ($i = 1; $i <= 5; $i++)
{
    $str .= 'xx'; //????? почему точка это делает
    echo "$str<br>";
}

?>