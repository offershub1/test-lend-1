<?php
$mail = 'amideco@mail.ru';

if (!empty($_POST['name']) && !empty($_POST['number']))
{
	$name = $_POST['name'];
	$number = $_POST['number'];
	if (!empty($_POST['comment'])) $comment = $_POST['comment'];
	else $comment = 'Не указан';

	if(mail($mail, "Новый заказ", "Имя: $name\nТелефон: $number\nКомментарий: $comment")) echo 'Success';
	else echo 'Error';
}
else {
	echo 'Error';
}
