<?php
function genUnic($min, $max, $arr)
{
    while (in_array($rnd = (int)rand($min, $max), $arr)) {
    }
    return $rnd;
}

function genArr($colCount, $rowCount, $min = 1, $max = 1000)
{
    $arr = [];
    for ($i = 0; $i < $rowCount; $i++) {
        for ($j = 0; $j < $colCount; $j++) {
            $arr[$i][$j] = genUnic($min, $max, $arr);
        }
    }
    return $arr;
}

function getSum($arr)
{
    $out = [];
    foreach ($arr as $value) {
        $out[] = array_sum($value);
    }
    return $out;
}

function transformArr($arr)
{
    return array_map(null, ...$arr);
}

// Генерация исходного массива
$arr = genArr(5, 7);
// Транспонирование массива
$arr_trans = transformArr($arr);

// Сумма Строк
$sumRow = getSum($arr);
// Сумма Колонок
$sumCol = getSum($arr_trans);

print_r($arr);
print_r($sumRow);
print_r($sumCol);
