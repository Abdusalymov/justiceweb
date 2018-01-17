<? php 
$fio = $_POST['fio'];
$email = $_POST['email'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);

$fio = urldecode($fio);
$email = urldecode($email);

$fio = trim($fio);
$email = trim($email);

echo $fio;
echo <br>;
echo $email;

if (mail(irbis180288@yandex.ru), "Заявка с сайта", "Имя:".$fio.".E-mail: ".$email, "From: c какого емейл отправляется \r\n");
{
    echo "сообщение успещно отправлено";
}else{
    echo "при отправке сообщения возникли ошибки";
}

?>
