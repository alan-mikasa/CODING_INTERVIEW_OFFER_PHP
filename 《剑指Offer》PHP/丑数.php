<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/20
 * Time: 15:44
 */

function GetUglyNumber_Solution($index){
    $ugly_numbers = [];
    $ugly_numbers[0] = 1;
    $index2 = 0;
    $index3 = 0;
    $index5 = 0;
    $next_index = 1;
    if ($index <= 0){
        return 0;
    }
    while($next_index < $index){
        $ugly_numbers[$next_index] = min($ugly_numbers[$index2] * 2,
                                            $ugly_numbers[$index3] * 3,
                                            $ugly_numbers[$index5] * 5);
        while($ugly_numbers[$index2] * 2 <= $ugly_numbers[$next_index]){
            $index2 += 1;
        }
        while($ugly_numbers[$index3] * 3 <= $ugly_numbers[$next_index]){
            $index3 += 1;
        }
        while($ugly_numbers[$index5] * 5 <= $ugly_numbers[$next_index]){
            $index5 += 1;
        }
        $next_index += 1;
    }
    return $ugly_numbers[$next_index - 1];
}

print_r(GetUglyNumber_Solution(1500));
echo "\n";
print_r(GetUglyNumber_Solution(00));