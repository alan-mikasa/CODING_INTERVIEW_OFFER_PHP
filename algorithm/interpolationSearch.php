<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/3
 * Time: 9:09
 */
function interpolationSearch($arr, $needle)
{
    $low = 0;
    $high = count($arr) - 1;
    while ($low <= $high){
        $mid = (int)($low + ($needle - $low) * ($high - $low) / ($arr[$high] - $arr[$low]));

        if ($needle < $arr[$mid]){
            $high = $mid - 1;
        }elseif ($needle > $arr[$mid]){
            $mid = $mid + 1;
        }else{
            return $mid;
        }
    }
    return -1;

}