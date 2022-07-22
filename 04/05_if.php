<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));
$msg = "";


if ($num == 1) {
    $msg = "素数ではありません";
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $msg = "素数ではありません";
        break;
    } else {
        $msg = "素数です";
    }
};

echo $num . 'は' . $msg;


//1は入れない。2から。
