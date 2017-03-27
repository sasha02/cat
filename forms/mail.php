<?php

$recipient = "gorychan_sasha@mail.ru";
$site_name = "формa";

$name = trim($_POST["name"]);
$number = trim($_POST["tel"]);
$email = trim($_POST["email"]);
$comment = trim($_POST["text"]);

$message = "Ім'я: $name \n\n Номер: $number \n\n
 email: $email \n\n Коммент: $comment ";

$page_title = "ky \"$site_name\"";

mail($recipient, $page_title, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recipient");