# Тестовое задание на позицию программиста-стажера

Стек используемых технологий:

- PHP 8.2.4
- MariaDB 10.4.28 
- XAMPP 3.3.0

## Условия заданий

1. В базе данных MySQL(или любой диалект) есть таблица
Номенклатура и Штрих-коды. У одной номенклатуры есть
несколько штрих-кодов. Схематично нарисуйте необходимые вам
таблицы и связи между ними.
2. Напишите SQL запрос, выбирающий все штрих-коды у заданной
номенклатуры
3. Выведите список Номенклатура.Штрих-коды с сортировкой по
номенклатурам и штрих-кодам.
4. Напишите скрипт на PHP который выводит в консоли и в файл
двумерный массив (Код номенклатуры, Штрих-коды). В качестве
разделителя в строке используйте табуляцию
5. Напишите скрипт на PHP, который выводит текущую дату в
формате “20-10-2023 12:25”.
6. Напишите функцию на PHP: Выведите все числа от X до Y (включая
концы), которые делятся на число k без остатка.
7. Напишите функцию на PHP, которая преобразует строку,
состоящую из слов с разделителями пробел ( ) в строку с
разделителями подчеркивание (_)
8. Реализовать на PHP структуру классов, описывающих следующие
сущности: Поставщики, Клиенты, Банковские счета Поставщиков,
Банковские счета Клиентов. Поля класса на своё усмотрение.

## Инструкция для запуска

- Для запуска скриптов 5.php -- 8.php на компьютере необходимо иметь PHP версии. Запустить, например, 6.php можно командой `php 6.php`.
- Для скриптов 1.sql -- 3.sql нужен только MYSQL (или какой-нибудь его диалект) настроенный для работы (создан пользователь, имеющий необходимые права доступа). Для запуска необходимо:
1. Создать базу данных, например, так `mysql> CREATE DATABASE %DB;`
2. Выбрать её `mysql> USE %DB;`
3. Первым обязетельно запустить скрипт 1.sql, так как он создаст все таблицы и заполнит их тестовыми данными
`mysql> CREATE DATABASE %DB;`
4. Запускать 2.sql -- 3.sql командами вида `mysql> source 2.sql;`
- Для 4.php
1. Создать файл .env на основе .env-example, указав в нем свои поля %HOST, %USER, %PASSWORD, %DB.
2. Запустить скрипт командой `php 4.php`