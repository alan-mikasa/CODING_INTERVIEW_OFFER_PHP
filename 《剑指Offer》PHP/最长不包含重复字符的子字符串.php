<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/28
 * Time: 15:57
 */

function longestSubstringWithoutDuplication($str){
    $max_length = 0;
    $current_length = 0;
    $position = [];
    $arr = str_split($str);

    foreach ($arr as $i => $ch){
        $base_a = ord('a');
        $index_of_position = ord($ch) - $base_a;
        if (!isset($position[$index_of_position]) || ($i - $position[$index_of_position]) > $max_length){
            $current_length++;
        }else{
            $current_length = $i - $position[$index_of_position];
        }
        if ($current_length > $max_length){
            $max_length = $current_length;
        }
        $position[$index_of_position] = $i;
    }
    return $max_length;
}

//print_r(longestSubstringWithoutDuplication('arabcacfr'));

function longSub($str){
    $max_length = 0;
    $current_length = 0;
    $position = [];
    $arr = str_split($str);

    foreach ($arr as $i => $ch){
        if (!isset($position[$ch]) || ($i - $position[$ch]) > $max_length){
            $current_length++;
        }else{
            $current_length = $i - $position[$ch];
        }
        $max_length = $current_length > $max_length ? $current_length : $max_length;
        $position[$ch] = $i;
    }
    return $max_length;
}


//print_r(longSub('arabcacfr'));

//保留其中一个（最后的）最长的子串
function longSub2($str){
    $arr = str_split($str);
     $current_len = 0;
    $max_len = 0;
    $position = [];
    $result = [];
    foreach ( $arr as $i => $ch){
        if (!isset($position[$ch]) || ($i - $position[$ch]) > $max_len){
             $current_len++;
             $result[] = $ch;
        }else{
             $current_len = $i - $position[$ch];
             $offset = array_keys($result, $ch)[0] + 1; //从下一个开始，如cbc 就是从b开始，所以要+1
            $result = array_slice($result, $offset);
            array_push($result, $ch);
        }
        $max_len = ($max_len > $current_len) ? $max_len : $current_len;
        $position[$ch] = $i;
    }
    return [$max_len,$result];
    
}

print_r(longSub2('arabcacfr'));




//print_r(array_keys([1,2,3,4,5,6,4,2,2], 2));