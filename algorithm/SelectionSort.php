<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/6/27
 * Time: 11:31
 */

namespace app\algorithm;


use function PHPSTORM_META\type;

class SelectionSort
{
    public static function selectionSort($arr)
    {
        $count = count($arr);
        for ($i = 0; $i < $count; $i++){
            $minPos = $i;
            for($j = $i + 1; $j < $count; $j++){
                if ($arr[$j] < $arr[$minPos]){
                    $minPos = $j;
                }
            }
            if ($arr[$minPos] != $arr[$i]){
                list($arr[$minPos], $arr[$i]) = array($arr[$i], $arr[$minPos]);
            }
        }
        return $arr;
    }
}


$arr = [8,7,6,5,4,3,2,1];
$result = SelectionSort::selectionSort($arr);
foreach ($result as $item) {
    echo $item . '-';
}

