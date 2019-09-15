<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/3
 * Time: 16:18
 */
function findKthToTail($head, $k){
    $i = $j = $head;
    while($k-- > 0 && $i->next){
        $i = $i->next;
    }
    while ($i){
        $i = $i->next;
        $j = $j->next;
    }
    return $j;
}