<?php

function gender($firstName)
{
    $notSex = ['Саша', 'Женя', 'Ли'];//массив одинаковых имён
    if (in_array($firstName, $notSex)) {
        return null;

    } else {
        $symbol = substr($firstName, - 2);
        switch ($symbol) {
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
assert('ж' == gender('Аня'));
assert('м' == gender('Игорь'));
assert('м' == gender('Сергей'));
assert('ж' == gender('Оля'));
assert('ж' == gender('Мария'));
assert('м' == gender('Олег'));
assert(null === gender('y'));
assert(null === gender(' '));
assert(null == gender('Саша'));
