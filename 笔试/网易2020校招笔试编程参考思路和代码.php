<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/5
 * Time: 15:10
 */
###倒数排列
/**
 * 给出正数第Q的排列Pi，求倒数第Q的排列Qi
 */
function findLastQthList(){
    $list = $result = [];

    $n = trim(fgets(STDIN));
    for ($i=0; $i<$n; $i++){
        $list[$i] = trim(fgets(STDIN));
        $result[$i] = $n + 1 -$list[$i];
    }
    return $result;
}
print_r(findLastQthList());


/**序列交换
 *思路
 *只要数组中同时出现了奇数和偶数，那么直接对数组进行排序即可。
 */


/**数字圆环
 *思路
 * 首先对数组进行排序，除了最后一个数字，都满足相邻两个数字大于自己(显然)
 * 对于最后一个数字，交换最后两个数字，判断是否满足条件即可。
 */





/**
 * https://www.nowcoder.com/discuss/216237?type=0&order=0&pos=1&page=4
 */
