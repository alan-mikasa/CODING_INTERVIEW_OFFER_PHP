<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/3
 * Time: 9:19
 */

namespace app\algorithm;


class DTSTree
{
    public $root = null;
    public function __construct(TreeNode $treeNode)
    {
        $this->root = $treeNode;
        $this->visited = new \SplQueue();
    }

    public function DFSRecursion(TreeNode $node){
        $this->visited->enqueue($node);

        if ($node->children){
            foreach ($node->children as $child){
                $this->DFS($child);
            }
        }
        return $this->visited;
    }

    public function DFS(TreeNode $node)
    {
        $stack = new \SplStack();
        $visited = new \SplQueue();

        $stack->push($node);

        while(!$stack->isEmpty()){
            $current = $stack->pop();
            $visited->enqueue($current)

            //todo
        }
    }
}