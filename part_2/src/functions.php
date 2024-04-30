<?php
function task1($arr, $return = false){
    foreach ($arr as $key => $value) {
        echo "<p>$value</p>";
    }

    if ($return) {
        return implode(' ', $arr);
    }
};

function task2($op, ...$args) {

    switch ($op) {
        case '+':
            return array_sum($args);
        case '-':
            $num = $args[0];
            for ($i = 1; $i < count($args); $i++){
                $num -= $args[$i];
            }
            return $num;
        case '*':
            return array_product($args);
        case '/':
            $num = $args[0];
            for ($i = 1; $i < count($args); $i++){
                $num /= $args[$i];
            }
            return $num;
        default:
            return 'Неизвестный оператор';
    }
};

function task3($arg1, $arg2){

    if (!is_int($arg1) || !is_int($arg2)) {
        echo '<strong style="color:red">WARNING!</strong> Для корректной работы функции нужны 2 целых числа';
        return;
    }
    
    echo '<table border=".5" style="text-align: center; font-size: 1rem">';

    for ($i = 1; $i <= $arg1; $i++) {
        echo '<tr>';

        for ($j = 1; $j <= $arg2; $j++) {
            echo '<td style="width: 2.5rem; height: 2.5rem">' . ($i * $j) . '</td>';
        }

        echo '</tr>';
    }

    echo '</table>';
};

function task4(){
    date_default_timezone_set('Europe/Moscow');
    echo date('d.m.Y H:i') . '</br>';
    echo strtotime('24.02.2016 00:00:00') . '</br>';
};

function task5($str, $search, $replace) {
    return str_replace($search, $replace, $str);
};

function task6($file) {
    $line = file_get_contents($file);

    echo $line . '</br>';
};
