<?php

if (isset($_POST["msg_from"]) and isset($_POST['msg_mail']) and isset($_POST['msg_message'])
    and isset($_POST["msg_submit"]) and isset($_POST["msg_url"])){



    //$mass=out_mas;

    function out_mass(){

        $name = $_POST['msg_from'];
        $email= $_POST['msg_mail'];
        $mas_url = $_POST["msg_url"];
        $mass = $_POST['msg_message'];


    $guest=array($name, $email, $mas_url,$mass);

        foreach ($guest as $value)
        echo "$value<br>";

    }


}
            out_mass();

?>