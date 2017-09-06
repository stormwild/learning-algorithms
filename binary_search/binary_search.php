<?php

declare(strict_types=1);

function binarySearch(int $item, array $list): ?int {
    $low = 0;
    $high = count($list) - 1;
    
    while ($low <= $high) {
        $mid = (int) floor(($low + $high) / 2);
        if($list[$mid] === $item) {
            return $mid;
        }
        
        if($list[$mid] > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    
    return null;
}

$my_list = [1, 3, 5, 7, 9];

echo binarySearch(3, $my_list) . PHP_EOL;
echo binarySearch(-1, $my_list) . PHP_EOL;