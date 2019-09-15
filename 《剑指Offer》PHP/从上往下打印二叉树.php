<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/8
 * Time: 9:18
 */

/**从上往下打印出二叉树的每个节点，同层节点从左至右打印。
   建立一个队列，先将根节点入队，然后将队首出队，
 * 然后判断它的左右子树是否为空，不为空，则先将左子树入队，然后右子树入队。
 */
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}

function printFromTopToBottom($root)
{

    $nodeList = [];
    $valList = [];

    if (empty($root)){
        return $valList;
    }

    array_push($nodeList, $root);
    while(!empty($nodeList)){
        $node = array_shift($nodeList);
        if ($node->left){
            array_push($nodeList, $node->left);
        }
        if ($node->right){
            array_push($nodeList, $node->right);
        }
        array_push($valList, $node->val);
    }
    return $valList;


}

//分行打印
function printFromTopToBottom2($root)
{
    $valList = [];
    $nodeList = [];

    if(empty($root)){
        return $valList;
    }

    array_push($nodeList, $root);
    while(!empty($nodeList)){
        $node = array_shift($nodeList);
        if($node->left != NULL)
            array_push($nodeList,$node->left);
        if($node->right != NULL)
            array_push($nodeList,$node->right);
        array_push($valList,$node->val);
    }

    return $valList;

}