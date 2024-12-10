<?php

$surname = trim(strip_tags($_POST["surname"]));
$name = trim(strip_tags($_POST["name"]));
$date_birthday = trim(strip_tags($_POST["date_birthday"]));
$mail = trim(strip_tags($_POST["mail"]));
$login = trim(strip_tags($_POST["login"]));
$password = trim(strip_tags($_POST["password"]));

$subject = "Регистрация на сайте url_вашего_сайта";
$msg = "Ваши данные формы регистрации\n" .
       "Фамилия: $surname\n" .
       "Имя: $name\n" .
       "Дата рождени: $date_birthday\n" .
       "Почта: $mail\n" .
       "Login: $login\n" .
       "Password: $password\n";

$headers = "Content-type: text/plain; charset=UTF-8\r\n";
// $headers .= "From: Bame_wws <Baumemail>\r\n";
// $headers .= "Bcc: Baumemail\r\n";

if (!empty($surname) && !empty($name) && !empty($date_birthday) &&
    !empty($mail) && !empty($login) && !empty($password) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    mail($mail, $subject, $msg, $headers);
    echo "Данные внесены в систему.";
}
?>