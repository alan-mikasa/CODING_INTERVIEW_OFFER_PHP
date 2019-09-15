<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/4
 * Time: 15:44
 */
/**
 * 在一个排序的链表中，存在重复的结点，请删除该链表中重复的结点，重复的结点不保留，返回链表头指针。
 * 例如，链表1->2->3->3->4->4->5 处理后为 1->2->5
 */
class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}
function deleteDuplication($pHead){
   $p = $pHead;
   $prev = null;
   while($p){
       if ($p->val == $p->next->val){
           $sameVal = $p->val;
           while($p->val == $sameVal){
               $p = $p->next;
           }
           if (!$prev){
               $pHead = $p;
           }else{
               $prev->next = $p;
           }
       }else{
           $prev = $p;
           $p = $p->next;
       }

   }
   return $pHead;
}