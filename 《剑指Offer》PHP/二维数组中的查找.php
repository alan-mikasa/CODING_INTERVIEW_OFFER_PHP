<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/6
 * Time: 16:22
 */

function Find($target, $array){
    $row = count($array) - 1;
    $col = 0;
    $cols = count($array[0]);
    while($col < $cols && $row >= 0 ){
        if ($target < $array[$row][$col]){
            $row--;
        }elseif ($target > $array[$row][$col]){
            $col++;
        }else{
            return true;
        }
    }
    return false;
}