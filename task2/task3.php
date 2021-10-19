<?php

function gander($firstName)
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
assert('ж' == gander('Аня'));
assert('м' == gander('Игорь'));
assert('м' == gander('Сергей'));
assert('ж' == gander('Оля'));
assert('ж' == gander('Мария'));
assert('м' == gander('Олег'));
assert(null === gander('y'));
assert(null === gander(' '));
assert(null == gander('Саша'));
