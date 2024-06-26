<?php
require('src/functions.php');

echo "<h1>Домашнее задание (часть 2)</h1>";

echo "<h2>Задание 1</h2>";
$arr = ["C-подобный скриптовый язык", "общего назначения, интенсивно","применяемый для разработки веб-приложений."];
echo "<h4>Вызов с вторым аргументом = true</h4>";
echo '<span style="color:red">return: </span>' . task1($arr, true) . '</br>';
echo "<h4>Вызов без второго аргумента</h4>";
echo '<span style="color:red">return: </span>' . task1($arr) . '</br>';

echo "<h2>Задание 2</h2>";
echo "<h4>Вызов с аргументами: '+', 45, 5, 3, 1</h4>";
echo task2('+', 45, 5, 3, 1);
echo "<h4>Вызов с аргументами: '/', 45, 5, 3, 1</h4>";
echo task2('/', 45, 5, 3, 1);
echo "<h4>Вызов с аргументами: 'dasda', 45, 5, 3, 1</h4>";
echo task2('dasda', 45, 5, 3, 1);

echo "<h2>Задание 3</h2>";
echo "<h4>Вызов с аргументами: 9.5, 5</h4>";
task3(9.5, 5);
echo "<h4>Вызов с аргументами: 5, 5</h4>";
task3(5, 5);

echo "<h2>Задание 4</h2>";
task4();

echo "<h2>Задание 5</h2>";
$str1 = 'Карл у Клары украл Кораллы';
$str2 = 'Две бутылки лимонада';
echo task5($str1, 'К', '') . '</br>';
echo task5($str2, 'Две', 'Три') . '</br>';

echo "<h2>Задание 6</h2>";
file_put_contents('test.txt', 'Hello again!');
task6('test.txt');