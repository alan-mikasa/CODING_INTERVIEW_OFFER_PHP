<?php
//给定一个非空数组，数组中元素为 a0, a1, a2, … , an-1，其中 0 ≤ ai < 231 。 
//
// 找到 ai 和aj 最大的异或 (XOR) 运算结果，其中0 ≤ i, j < n 。 
//
// 你能在O(n)的时间解决这个问题吗？ 
//
// 示例: 
//
// 
//输入: [3, 10, 5, 25, 2, 8]
//
//输出: 28
//
//解释: 最大的结果是 5 ^ 25 = 28.
// 
// Related Topics 位运算 字典树



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaximumXOR($nums) {
        $res = 0;
        $mask = 0;
        for ($i = 31; $i > -1; $i--){
            $mask |= (1 << $i);

            // 当前得到的所有前缀都放在这个哈希表中
            $map = [];
            foreach ($nums as $num) {
                $pre = $mask & $num;
                if (!in_array($pre, $map)){    // 如果 a ^ b = c 成立，那么a ^ c = b 与 b ^ c = a 均成立。
                    $map[] = $pre;
                }
            }

            // 先“贪心地”假设这个数位上是 “1” ，如果全部前缀都看完，都不符合条件，这个数位上就是 “0”
            $tmp = $res | (1 << $i);

            foreach ($map as $m){
                if (in_array($m ^ $tmp, $map)){
                    $res = $tmp;
                    break;
                }
            }
        }
        return $res;
    }
}
//leetcode submit region end(Prohibit modification and deletion)

//如果 a ^ b = c 成立，那么a ^ c = b 与 b ^ c = a 均成立。