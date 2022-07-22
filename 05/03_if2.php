<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

echo '私は、';

echo PHP_EOL;

foreach ($foods as $food => $f) {
    echo "{$food}に{$f}" . PHP_EOL;
}

echo 'を食べます';
