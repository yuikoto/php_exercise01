<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];
$date = "";


foreach ($subjects as $subject) {

    switch ($subject) {
        case "数学":
            $date = '明日です｡';
            break;

        case "英語":
            $date = '明後日です｡';
            break;

        case "理科":
            $date = '明々後日です｡';
            break;

        case "社会":
            $date = '昨日です｡';
            break;

        default:
            $date = '中止です｡';
            break;
    }

    echo "{$subject}の試験は{$date}" . PHP_EOL;
}
