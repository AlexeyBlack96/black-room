<?php
// несколько получателей
$to  = 'info@black-room.ru';  // обратите внимание на запятую

// тема письма
$subject = 'Письмо с моего сайта. Тариф - Продажа вашего товара или услуги от'  . $_POST['dfname1'];

$messageInp = $_POST['dfname5'];

if (empty($messageInp)){
    $messageInp = "Сообщение пустое";
}

$message = 'Тариф - Продажа вашего товара или услуги.' . '<br />' . 'Имя: ' . $_POST['dfname1'] . '<br />' . 'Аккаунт: ' . $_POST['dfname2'] . '<br />' . 'Телефон: ' . $_POST['dfname3'] . '<br />' . 'Почта: ' . $_POST['dfname4'] . '<br />' . '<br />' . 'Сообщение: ' . $messageInp;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Иван <info@black-room.ru>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['dfname1'] . '<' . 'lesha4400573@gmail.com' . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="index");}
window.setTimeout("changeurl();",100);
</script>

