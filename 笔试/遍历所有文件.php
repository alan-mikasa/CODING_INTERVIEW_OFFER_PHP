<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/20
 * Time: 9:15
 */

function getDirInfo($path){
    $res = [];
    if ($handle = opendir($path)){
        while($file = readdir($handle)){
            if ($file != ".." && $file != '.'){
                if (is_dir("$path"."/"."$file")){
                    $res[$file] = getDirInfo("$path"."/"."$file");
                }else{
                    $res[] = $file;
                }
            }
        }
        closedir($handle);
        return $res;
    }
}

function myScanDir($path){
    $files = [];
    if ($handle = opendir($path)){
        while($file = readdir($handle)){
            if ($file != '..' && $file != '.'){
                if (is_dir("$path"."/"."$file")){
                    $files[$file] = myScanDir("$path"."/"."$file");
                }else{
                    $files[] = $file;
                }
            }
        }
        closedir($handle);
        return $files;
    }
}

print_r(myScanDir(""));