<?php
function gen($count)
{
    $arr = [];
    $end = 0;

    do {
        $start = $end + 1;
        $end = $start + count($arr);
        if ($end>$count) $end = $count;
        $arr[] = range($start, $end);
    } while ($end < $count);
    return $arr;
}

print_r(gen(100));
