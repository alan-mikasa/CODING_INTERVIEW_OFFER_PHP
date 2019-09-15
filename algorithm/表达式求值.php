<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/19
 * Time: 15:54
 */
//https://www.nowcoder.com/practice/3e483fe3c0bb447bb17ffb3eeeca78ba?tpId=98&tqId=32836&tPage=1&rp=1&ru=/ta/2019test&qru=/ta/2019test/question-ranking

//    fscanf(STDIN, "%s", $input);
    $input = trim(fgets(STDIN));
//    print_r($input);
    $arr = explode(' ', $input);
    $result = array();
    $result[0] = $arr[0] + $arr[1] + $arr[2];
    $result[1] = $arr[0] * $arr[1] * $arr[2];
    $result[2] = $arr[0] * ($arr[1] + $arr[2]);
    $result[3] = ($arr[0] + $arr[1]) * $arr[2];
    $result[4] = $arr[0] * $arr[1] + $arr[2];
    $result[5] = $arr[0] + $arr[1] * $arr[2];

    $max = $result[0];
    foreach($result as $j){
        if($j > $max){
            $max = $j;
        }
    }
    fwrite(STDOUT,$max);
