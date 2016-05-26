<?
// Установка локали
setlocale(LC_ALL, "russian");
// Обявление константы
define('COPYRIGHT', 'Bernasovskiy');

/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int)strftime('%H');
$welcome = ''; //Инициализируем переменную для приветсвия
	if ($hour >= 6 and $hour < 12) {
		$welcome = 'Доброе утро';
	} elseif ($hour >= 12 and $hour < 18) {
		$welcome = 'Добрый день';
	} elseif ($hour >= 18 and $hour < 23) {
		$welcome = 'Добрый вечер';
	} else {
		$welcome = 'Доброй ночи';
	}