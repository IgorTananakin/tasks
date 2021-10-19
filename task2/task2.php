<?php

function discriminant($a, $b, $c){
    return $b**2 - 4*$a*$c;
};

assert(81 == discriminant(4, 7, -2));
assert(0 == discriminant(25, 10, 1));
assert(-20 == discriminant(30, 10, 1));

//ax**2 + bx + c
$a = 1;
$b = 3;
$c = -4;

    echo '<p>' . $a . '^2+(' . $b . ')+(' . $c . ')</p>';

    $discriminant = discriminant($a, $b, $c);

     echo '<p>D=' . $b . '^2-4*' . $a . '*' . $c . '=' . $discriminant . '</p>';

    if ($discriminant > 0) {

        echo '<p>x1=((-b+sqrt(D))/(2a))=' . (-$b + sqrt($discriminant))/(2*$a) . '</p>';
        echo '<p>x2=((-b-sqrt(D))/(2a))=' . (-$b - sqrt($discriminant))/(2*$a) . '</p>';

    } elseif ($discriminant == 0) {
        
            echo '<p>x = -b/(2a) =' . -$b . '/(2*' . $a . ') =' . -$b/(2*$a) . '</p>';

    } elseif ($discriminant < 0) {
        echo ' <p> Нет действительных корней </p>';
    }
    ?>

