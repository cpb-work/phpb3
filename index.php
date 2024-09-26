<?php
echo "Введите вашу фамилию: ";
$surname = trim(fgets(STDIN));

while ($surname === '') {
    echo "Вы ничего не ввели, повторите ввод фамилии: ";
    $surname = trim(fgets(STDIN));
}

echo "Введите ваше имя: ";
$name = trim(fgets(STDIN));

while ($name === '') {
    echo "Вы ничего не ввели, повторите ввод имени: ";
    $name = trim(fgets(STDIN));
}

echo "Введите ваше отчество: ";
$patronymic = trim(fgets(STDIN));

while ($patronymic === '') {
    echo "Вы ничего не ввели, повторите ввод отчества: ";
    $patronymic = trim(fgets(STDIN));
}

$surnameUpd = mb_substr(mb_strtoupper($surname,'utf-8'),0,1,'utf-8').mb_substr($surname,1,mb_strlen($surname,'utf-8'),'utf-8');
$nameUpd = mb_substr(mb_strtoupper($name,'utf-8'),0,1,'utf-8').mb_substr($name,1,mb_strlen($name,'utf-8'),'utf-8');
$patronymicUpd = mb_substr(mb_strtoupper($patronymic,'utf-8'),0,1,'utf-8').mb_substr($patronymic,1,mb_strlen($patronymic,'utf-8'),'utf-8');

$fullName = "$surnameUpd $nameUpd $patronymicUpd";

$fio = mb_substr($surnameUpd, 0, 1) . mb_substr($nameUpd, 0, 1) . mb_substr($patronymicUpd, 0, 1);

$surnameAndInitials = "$surnameUpd " . mb_substr($nameUpd, 0, 1) . '.' . mb_substr($patronymicUpd, 0, 1) . '.';

echo PHP_EOL . "__________ Результат __________" . PHP_EOL;
echo "Полное имя: $fullName" . PHP_EOL;
echo "Аббревиатура: $fio" . PHP_EOL;
echo "Фамилия и инициалы: $surnameAndInitials" . PHP_EOL;

unset($surname, $name, $patronymic, $surnameUpd, $nameUpd, $patronymicUpd);