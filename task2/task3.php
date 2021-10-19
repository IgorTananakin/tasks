<?php

function name($firstName)
{
    $count = strlen($firstName);
    $symbol = substr($firstName, $count-2);
    switch ($firstName) {
        case 'Саша':
        case 'Женя':
        case 'Ли':
            return 'такое имя есть м ж';
            break;
        default:
            switch($symbol) {
                case 'я':
                    return 'ж';
                    break;
                case 'й':
                case 'ь':
                case 'г':
                case 'а':
                    return 'м';
                    break;
                default:
                    return null;
                    break;
            }
    }

}
assert('ж' == name('Аня'));
assert('м' == name('Игорь'));
assert('м' == name('Сергей'));
assert('ж' == name('Оля'));
assert('ж' == name('Мария'));
assert('м' == name('Олег'));
assert(null === name('y'));
assert(null === name(' '));
assert('такое имя есть м ж' == name('Саша'));
