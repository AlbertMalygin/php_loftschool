<?php

$age = mt_rand(0,100);
echo "Возраст: $age<br>";

if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} else if ($age <= 17) {
    echo 'Вам ещё рано работать';
} else if ($age >= 65) {
    echo 'Вам пора на пенсию';
} else {
    echo 'Неизвестный возраст';
}
