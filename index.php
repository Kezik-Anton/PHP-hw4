<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<p>1. Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.</p>

<?php 

    $string1 = ucwords('london is the capital of great britain');
    
    echo $string1;

?>
<hr />

<p>2. Дана строка 'html <b>css</b> php'. Удалите теги из этой строки. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</p>

<?php

    $string2 = strip_tags('html <b>css</b> php');

    $arr2 = explode(' ', $string2);

    echo '<pre>'. print_r($arr2, true) . '</pre>';

?>
<hr />

<p>3. Дана строка. Перемешайте символы этой строки в случайном порядке.</p>

<?php 

    $string3 = str_shuffle('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, optio!'); 

    echo $string3;

?>
<hr />

<p>4. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.</p>

<?php 

    echo 'В текущем месяце дней: ' . date('t');

?>
<hr />

<p>5. Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.25', '12:59:59', timestamp.</p>

<?php 

    echo date('Y-m-d') . ', ' . date('d.m.Y') . ', ' . date('d.m.y') . ', ' . date('H:i:s') . ', ' . time();

?>

<hr />

<p>6. В переменной $date лежит дата в формате '2025-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.</p>

<?php 

    $date = date('Y-m-d');

    echo 'Начальная дата: ' . $date . '<br />';
    echo 'Плюс 2 дня: ' . date('Y-m-d', strtotime($date . ' +2 day')) . '<br />'; 
    echo 'Плюс 1 месяц и 3 дня: ' . date('Y-m-d', strtotime($date . ' +1 month, +3 day')) . '<br />'; 
    echo 'Плюс 1 год: ' . date('Y-m-d', strtotime($date . ' +2 year')) . '<br />'; 
    echo 'Минус 3 дня: ' . date('Y-m-d', strtotime($date . ' -3 day')) . '<br />'; 

?>

<hr />

<p>7. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.</p>

<?php 

    $string7 = '1a2b3c4b5d6e7f8g9h0';

    echo preg_replace('/[0-9]/', '', $string7);

?>

<hr />

<p>8. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число.</p>

<?php 

    $arr8 = [4, -2, 5, 19, -130, 0, 10];

    echo 'Минимальное число: ' . min($arr8) . '. Максимальное число: ' . max($arr8);

?>

<hr />

<p>9. Выведите на экран случайное число от 1 до 100.</p>

<?php  echo rand(1, 100);?>

<hr />

<p>10. Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели.</p>

<?php 

    $arr10 = [
        '1' => 'понедельник',
        '2' => 'вторник',
        '3' => 'среда',
        '4' => 'четверг',
        '5' => 'пятница',
        '6' => 'суббота',
        '7' => 'воскресенье'
    ];

    echo 'Сегодня ' . $arr10[date('w')];

?>

<hr />

<p>11. Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.</p>

<?php 

    $arr11 = [[1, 2, 3], [4, 5], [6]];
    $sum = 0;

    for ($i = 0; $i < count($arr11); $i++) {
        $sum += array_sum($arr11[$i]);
    }

    echo 'Сумма = ' . $sum;

?>

<hr />

<p>12. Есть массив $array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то есть вывести без дублей при помощи лишь одного цикла и без использования функций PHP.</p>

<?php 

    $array_12 = array(1,1,1,2,2,2,2,3);
    $value_12 = '';
    $result_12 = '';


    for($i = 1; $i < count($array_12); $i++) {
        if($value_12 != $array_12[$i]) 
        {
            $result_12 .= $array_12[$i] . ($i != count($array_12)-1 ? ',' : '' );
            $value_12 = $array_12[$i];
        }
    }

    echo $result_12;
?>

<hr />

<p>13. Используя ассоциативный массив, добавить на страницу навигационное меню</p>

<?php 

    $array_13 = [
        ['link' => 'index', 'text' => 'Home'],
        ['link' => 'about', 'text' => 'About'],
        ['link' => 'services', 'text' => 'Services'],
        ['link' => 'catalog', 'text' => 'Catalog'],
        ['link' => 'contacts', 'text' => 'Contacts']
    ];

    foreach($array_13 as $value) {

?>

<ul>
    <li><a href="<?=$value['link']?>.php"><?=$value['text']?></a></li>
</ul>

<?php } ?>

<hr />

<p>14. Вывести на черном фоне n красных квадратов случайного размера в случайной позиции в браузере.</p>

<div style="width: 1000px; height: 500px; border: 1px solid #000">

    <?php 

        $n = 5;

        for ($i = 0; $i < $n; $i++) {

            $h = rand(5,100);

    ?>

        <div style="position:absolute; width: <?=$h?>px; height: <?=$h?>px; background-color: rgb(<?=rand(0,255)?>,<?=rand(0,255)?>,<?=rand(0,255)?>); margin: <?=rand(0,400)?>px <?=rand(0,900)?>px;"></div>

    <?php } ?>

</div>

<hr />

<p>15. Дана строка с любыми символами. Для примера пусть будет '1234567890'. Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890')
и так далее пока символы в строке не закончатся.</p>

<?php 

    $array_15 = str_split('1234567890123456789012345678901234567890');

    for ($i = 1, $j = 0; $i <= sqrt(count($array_15)*2); $i++) {
        $new_array_15[$i-1] = implode(array_slice($array_15, $j, $i));
        $j += $i;
        }
    echo '<pre>'. print_r($new_array_15, true) . '</pre>';

?>

<hr />

<p>16. Найдите сумму элементов массива между двумя нулями (первым и последним нулями в массиве). Если двух нулей нет в массиве, то выведите ноль. В массиве может быть более 2х нулей. Пример массива: [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2]</p>

<?php 

    $array_16 = [1,8,0,13,76,8,7,0,22,0,2,3,2];
    $array_keys = array_keys($array_16, 0);

    if (count($array_keys) > 1) {
        $sum = 0;

        for($i = ($array_keys[0]+1); $i < $array_keys[count($array_keys)-1]; $i++) {
            $sum += $array_16[$i];
        }
        echo $sum;
    } else {
        echo '0';
    }

?>

<hr />

<p>17. Сделайте функцию, которая будет генерировать случайный цвет в hex (dechex) формате (типа #ffffff).</p>

<?php 

    function randColor() {
        $color = str_pad(dechex(rand(0x0, 0xFFFFFF)), 6 , "0");
    return $color;
    }

?>

<span style = "padding: 3px;background-color:#<?=randColor()?>">#<?=randColor()?></span>

<hr />

<p>18. Дана строка '332 441 550'. Найдите все места, где есть два одинаковых идущих подряд цифры и замените их на '!'.</p>

<?php 

    $string_18 = '332 441 550';

    preg_match_all('/(.)\1+/', $string_18, $matches_18);

    foreach($matches_18[0] as $value) { 
        $string_18 = str_replace($value, '!', $string_18);
    }

    echo $string_18;

?>

<hr />

<p>19. Напишите ф-цию строгой проверки ввода номер телефона в международном формате (код страны код города или сети номер телефона) и упрощенной проверки ввода простого номера с кодом и без него. Функция должна возвращать true или false.</p>

<?php

function phoneCheker($a) {
    $pattern = '/^(?:\+375)\d{9}$/';
    return preg_match($pattern,$a);
}

var_dump(phoneCheker('+375291567857'));

?>

<hr />

<p>20. 20. Напишите ф-цию, которая должна проверить правильность ввода адреса эл. почты.</p>

<?php

/*

[^(@\-_.)][a-zA-z0-9(\.(\-)?_){1}]*[^(@\-\_\.)]@?[^(@\-_.)][a-zA-z0-9]{1,}.[a-z]{2,10}

*/

function checkEmail($a) {
    $pattern = '/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,10}/';
    return preg_match($pattern,$a);
}

var_dump(checkEmail('a._nton@mail.by'));

?>


<hr />