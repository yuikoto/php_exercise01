<?php

echo '$aの値を入力して下さい: ';
$a = trim(fgets(STDIN));

echo '$bの値を入力して下さい: ';
$b = trim(fgets(STDIN));


if ($a > $b) {
    echo $a;
} elseif ($a < $b) {
    echo $b;
} else {
    echo "入力された値は等しいです";
}
