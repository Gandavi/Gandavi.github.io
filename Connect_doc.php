<?php
 mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');
mb_http_output('UTF-8');
mb_language('uni');
 
date_default_timezone_set('Europe/Moscow');
header('Content-type: text/html; charset=utf-8');
// Кому.
$to = '=?UTF-8?B?' . base64_encode('Вася Пупкин') . '?= <daniil.shtokolov@yandex.ru>';
 
// От кого.
$from = '=?UTF-8?B?' . base64_encode('Иван Петров') . '?= <support@snipp.ru>';
 
$subject = 'Тема письма';
$body    = 'Текст письма';
 
// Массив с файлами.
$files = array(
	__DIR__ . '/logo.png',
	__DIR__ . '/image.png',
);
 
$boundary = md5(uniqid(time()));
 
// Формирование заголовка письма.
$headers = array(
	'Content-Type: multipart/mixed; boundary="' . $boundary . '"',
	'Content-Transfer-Encoding: 7bit',
	'MIME-Version: 1.0',
	'From: ' . $from,
	'Date: ' . date('r')
);
 
// Формирование текста письма.
$message = array(
	'--' . $boundary,
	'Content-Type: text/html; charset=UTF-8',
	'Content-Transfer-Encoding: base64',
	'',
	chunk_split(base64_encode($body))
);
 
// Формирование файлов.
foreach ($files as $row) {
	if (is_file($row)) {
		$name = basename($row);
		$fp   = fopen($row, 'rb');
		$file = fread($fp, filesize($row));
		fclose($fp);
 
		$message[] =  '';
		$message[] =  '--' . $boundary;
		$message[] = 'Content-Type: application/octet-stream; name="' . $name . '"';
		$message[] = 'Content-Transfer-Encoding: base64';
		$message[] = 'Content-Disposition: attachment; filename="' . $name . '"';
		$message[] = '';
		$message[] = chunk_split(base64_encode($file));
	}
}
 
$message[] = '';
$message[] = "--" . $boundary . '--';
 
$headers = implode("\r\n", $headers);
$message = implode("\r\n", $message);
 
// Отправка.
mb_send_mail($to, $subject, $message, $headers);
?>