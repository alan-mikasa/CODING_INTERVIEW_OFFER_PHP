<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/2
 * Time: 22:05
 */
function linearSearch($arr, $needle){
    for ($i = 0, $count = count($arr); $i < $count; $i++){
        if ($needle == $arr[$i]){
            return true;
        }
    }
    return false;
}