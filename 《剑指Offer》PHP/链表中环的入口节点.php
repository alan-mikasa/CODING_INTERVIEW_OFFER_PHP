<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/4
 * Time: 18:30
 */
/**
 * 链表中环的入口节点
 */
/**
class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function EntryNodeOfLoop($pHead){
    $p1 = $p2 = $pHead;
    while($p1){
        $p1 = $p1->next->next;
        $p2 = $p2->next;
        if ($p1 && $p1 === $p2){
            $p1 = $pHead;
            break;
        }
    }
    while(1){
        if ($p1 === $p2){
            return $p1;
        }else{
            $p1 = $p1->next;
            $p2 = $p2->next;
        }
    }
}