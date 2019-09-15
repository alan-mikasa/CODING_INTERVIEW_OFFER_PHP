<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/4
 * Time: 17:55
 */
/**
 * 两个链表的第一个公共节点
 */
/**
class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function findFirstCommonNode($pHead1, $pHead2){
    $p = $pHead1;
    $q = $pHead2;
    if ($p === $q){
        return $p;
    }
    while($p !== $q){
        $p = ($p == null ? $pHead2 : $p->next);
        $q = ($q == null ? $pHead1 : $q->next);
    }
    return $p;
}

function findFirstCommonNode2($pHead1, $pHead2){
    $p = $pHead1;
    $q = $pHead2;
    if($p === $q){
        return $p;
    }
    while($p !== $q){
        $p = ($p == null) ? $pHead2 : $p->next;
        $q = ($q == null) ? $pHead1 : $q->next;
    }
    return $p;
}