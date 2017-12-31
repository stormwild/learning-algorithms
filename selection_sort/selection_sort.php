<?php

declare(strict_types=1);

function findSmallest(array & $list): int {
    $small = $list[0];
    $index = 0;
    for($i = $index, $len = count($list); $i < $len; $i++) {
        if($list[$i] < $small) {
            $small = $list[$i];
            $index = $i;
        }
    }
    return $index;
}

function selectionSort(array $list): array {
    $sorted = [];
    $len = count($list);
    for($i = 0; $i < $len; $i++) {
        $index = findSmallest($list);
        $sorted[] = array_splice($list, $index, 1)[0];
    }
    return $sorted;
}

echo '[' . join(', ', selectionSort([5, 3, 6, 2, 10])) . ']' . PHP_EOL;


