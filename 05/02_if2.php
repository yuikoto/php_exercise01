<?php

$poket_money = 1000;
$fund_raising = 101;
echo "あなたの所持金は{$poket_money}円です｡" . PHP_EOL;

do {
    $poket_money = $poket_money - $fund_raising;
    echo "{$fund_raising}円募金しました。" . PHP_EOL;
    echo "残り残高は{$poket_money}円です｡" . PHP_EOL;
} while ($poket_money >= $fund_raising);

echo "あなたはこれ以上募金できません｡";
