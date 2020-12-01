#PHP
**Задание 1**  
Напишите код (функцию, класс), которая проверяет простое число или нет
На вход - число, выход - да/нет

* файл functions.php

**Задание 2**  
Есть счет, в котором указана сумма с НДС, есть дата счета и все прочие атрибуты.  
Напишите класс, в нем метод - в который на вход поступает информация о счете, на выходе - стоимость без НДС (страна - Российская Федерация)

* файл Classes\Cost.php

Проверить результаты выполнения задачи 1 и 2 можно в файле index.php


#XML  
**Задание 1**  
Найдите ошибки в файле в приложении  

* Строка 74 и 75 использование & вместо спецсимвола

**Задание 2**  
Напишите код (на PHP) выдающий массив данных: 
   - Должник: id, тип, имя
   - Список лотов: по каждому - номер, стоимость, описание.

* файл parseXML.php

Проверить результаты выполнения задачи 2 можно в файле index.php

#MySQL
**Задание 1**  
Перечислите, чтобы вы поправили в таблицах (тип данных, название, длину - что угодно - и почему)  

1 - Таблица `users`:
  * Столбец ФИО пользователей я бы переименовала в `full_name`, т.к. просто `name` больше подразумевает только Имя, а не ФИО полностью.
  * У поля `name` увеличиваем кол-во символов до 70 (основано на данных библиотеки faker + 20% запас)
  * У поля `name` убираем DEFAULT NULL, т.к. регистрировать сотрудника без имени не имеет никакого смысла
  * У поля `office_id` так же убираем DEFAULT NULL, т.к. это связь, по ней будет идти выборка, к тому же если данное поле будет пустым, то это нарушение целостности данных
  
  
 2 - Таблица `offices`:
   * У поля `name` убираем DEFAULT NULL, т.к. регистрировать офис без имени не имеет никакого смысла
   * Так же у поля `name` ставим тип varchar, потому что mediumtext, это слишком много для названия офиса. Кол-во символов подбираем исходя из предплогаемых названий офисов (либо с помощью генерации фейковых данных) + 20% запас.
   
 Касательно типов данных в столбце `id` в таблице `offices` и столбце `office_id` в таблице `users`, я бы поставила int(10), так как есть вероятность того, что в дальнейшем офисов станет много и выделенной памяти под эти нужды нам не хватит.   


**Задание 2**  
Выведите имена пользователей и названия офисов, в которых они сидят

* SELECT `users`.`name` user_name, `offices`.`name` office_name FROM `users`   
INNER JOIN `offices`   
ON `users`.`office_id` = `offices`.`id`


**Задание 3**  
Выведите названия офисов, в котором сидят больше, чем один пользователь

SELECT `offices`.`name` FROM `offices`  
LEFT JOIN `users`  
ON `offices`.`id` = `users`.`office_id`  
GROUP BY `users`.`office_id`  
HAVING COUNT(`users`.`office_id`) > 1


#JS
**Задание 1**  
Напишите скрипт, который будет вытаскивать первое предложение последней (по дате) новости на www.karoteka.ru


**Задание 2**  
Напишите код, который исполнив в консоли, получим в подвале www.karoteka.ru (рядом с телефоном) текущее время (обновляемое по секундам)

Код по заданиям раздела JS находиться в файле scripts.js. Сайт www.karoteka.ru я не нашла, но думаю, что имелся ввиду www.kartoteka.ru.  
По данной сссылке https://www.kartoteka.ru/korporativnyye/page/1/ работала с новостями.