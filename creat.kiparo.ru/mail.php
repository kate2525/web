<?php

$recepient = "gluschenko.katja@gmail.com";
$sitename = "�������� �����";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "���: $name \nEmail: $email \n�����: $text";



$pagetitle = "����� ������ � ����� \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>
