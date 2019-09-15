<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/2
 * Time: 11:23
 */

class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x, $next=null){
        $this->val = $x;
        $this->next = $next;
    }
}

function EntryNodeOfLoop($pHead)
{
    // write code here
    $p1 = $p2 = $pHead;
    while($p1){
        $p1 = $p1->next->next;
        $p2 = $p2->next;
        if($p1 && $p1 === $p2){
            $p1 = $p1->next;
            $sum = 1;
            while($p1 !== $p2){
                $p1 = $p1->next;
                $sum++;
            }
            break;
        }
    }
    $p1 = $p2 = $pHead;
    while($sum--){
        $p1 = $p1->next;
    }
    while($p1 !== $p2){
        $p1 = $p1->next;
        $p2 = $p2->next;
    }
    return $p1;
}

function EntryNodeOfLoop2($pHead){
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
        }
        $p1 = $p1->next;
        $p2 = $p2->next;
    }
}
function main(){
    $node5 = new ListNode(5);
    $node4 = new ListNode(4, $node5);
    $node3 = new ListNode(3, $node4);
    $node2 = new ListNode(2, $node3);
    $node1 = new ListNode(1, $node2);
    $node5->next = $node3;
    $pHead = $node1;
    print_r(EntryNodeOfLoop2($pHead));
}
main();