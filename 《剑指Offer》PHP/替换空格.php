<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/6
 * Time: 16:52
 */

function replaceSpace($str){
    $strlen = strlen($str);
    $space = 0;
    $arr = [];
    for ($i=0,$len=$strlen; $i<$len; $i++){
        if ($str[$i] == ' '){
            $space++;
        }
        $arr[] = $str[$i];
    }
    for($i=0; $i<$space*2; $i++){
        $arr[$len++] = null;
    }

    $oldLen = $strlen - 1;
    $newLen = $len - 1;
    while($oldLen >= 0 && $newLen > $oldLen){
        if ($arr[$oldLen] == ' '){
            $arr[$newLen--] = '0';
            $arr[$newLen--] = '2';
            $arr[$newLen--] = '%';
        }else{
            $arr[$newLen--] = $arr[$oldLen];
        }
        $oldLen--;
    }
//    ksort($arr);
//    return implode('', $arr);
    return $arr;
}

print_r(replaceSpace('hello world 123'));

//function main(){
//    $str = '12345';
//    $str .= null;
//    $str .= '7';
//    print_r($str);
//}
//main();