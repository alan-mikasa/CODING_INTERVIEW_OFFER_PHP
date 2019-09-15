<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/3
 * Time: 16:48
 */
function ReverseList($pHead){
    $p = $pHead;
    $newHead = null;
    while($p){
        $next = $p->next;
        $p->next = $newHead;
        $newHead = $p;
        $p = $next;
    }
    return $newHead;
}