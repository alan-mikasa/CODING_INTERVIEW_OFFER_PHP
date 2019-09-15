<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/6
 * Time: 10:13
 */

function GetNumberOfK($data, $k){
    $len = count($data);
    if (!$len){
        return 0;
    }
    $first = getFirst($data, $k, 0, $len-1);
    $last = getLast($data, $k, 0, $len-1);
    if ($first != -1 && $last != -1){
        return $last - $first + 1;
    }
    return 0;
}

function getFirst($data, $k, $start, $end){
    if ($start > $end){
        return -1;
    }
    $mid = ($start + $end) >> 1;
    if($data[$mid] > $k){
        return getFirst($data, $k, $start, $mid - 1);
    }elseif ($data[$mid] < $k){
        return getFirst($data, $k, $mid + 1, $end);
    }elseif ($mid - 1 >= 0 && $data[$mid - 1] == $k){
        return getFirst($data, $k, $start, $mid - 1);
    }else{
        return $mid;
    }
}

function getLast($data, $k, $start, $end){
    $mid = ($start + $end) >> 1;
    $len = count($data);
    while($start <= $end){
        if ($data[$mid] > $k){
            $end = $mid - 1;
        }elseif ($data[$mid] < $k){
            $start = $mid + 1;
        }elseif ($mid + 1 < $len && $data[$mid + 1] == $k){
            $start = $mid + 1;
        }else{
            return $mid;
        }
        $mid = ($start + $end) >> 1;
    }
    return -1;
}

print_r(GetNumberOfK([1,2,3,3,3,3,4,5], 3));