<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$token = "491265963:AAHixm6TLnCRg6C5IJbn3VvGb3IxXOsV5vg";
$chat_id = "-234195236";
$arr = array(
	'Имя пользователя: 🙋‍♂️' => $name,
	'Телефон: 📱' => $phone,
	'Почта: ✉️' => $email,
	'Город: 🌇' => $city
);

foreach($arr as $key => $value) {
  $txt .= "  ".$key."  ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id} $parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	header('Location: thank-you.html');
} else {
	echo "Error";
}


 ?>