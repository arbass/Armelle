<?php

 

$sendto   = "armellebiz52@gmail.com"; // почта, на которую будет приходить письмо

$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем

$usertel = $_POST['phone']; // сохраняем в переменную данные полученные из поля c телефонным номером

$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты

$usertext = $_POST['city']; // сохраняем в переменную данные полученные из поля c адресом электронной почты

 

// Формирование заголовка письма

$subject  = "Заявка с сайта";

$headers  = "From: " . strip_tags($usermail) . "\r\n";

$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

 

// Формирование тела письма

$msg  = "<html><body style='font-family:Arial,sans-serif;font-size:40px;'>";

$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка с сайта</h2>\r\n";

$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";

$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";

$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";

$msg .= "<p><strong>Город:</strong> ".$usertext."</p>\r\n";

$msg .= "</body></html>";

ini_set('short_open_tag', 'On');

header('Refresh: 3; URL=index.html'); 

// отправка сообщения

mail($sendto, $subject, $msg, $headers) or print "Не могу отправить письмо !!!";

echo "<center><b><p style='font-family:Arial,sans-serif;font-size:30px; '> Спасибо за проявленный интерес к нашей компании. <br> <br><br> Мы с Вами свяжемся в течение 24 часов.</p>";

exit;

?> <script type="text/javascript">

setTimeout('location.replace("/index.html")', 3000);

/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/

</script> 

