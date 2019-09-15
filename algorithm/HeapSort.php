<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/6/28
 * Time: 10:38
 */

namespace app\algorithm;


class HeapSort
{
    public static function heapSort($arr)
    {
        $length = count($arr);
        $heapSize = $length - 1;
        $arr = self::buildHeap($arr); // todo
        for ($i = $heapSize; $i >= 0; $i--){
            list($arr[0], $arr[$heapSize]) = [$arr[$heapSize], $arr[0]];
            $heapSize--;
            $arr = self::heapify(0, $heapSize, $arr);
        }
        return $arr;
    }

    public static function buildHeap($arr)
    {
        $length = count($arr);
        $heapSize = $length - 1;
        for ($i = intval($length / 2); $i >= 0; $i--){
            $arr = self::heapify($i, $heapSize, $arr);
        }
        return $arr;
    }
    public static function heapify($k, $heapSize, $arr)
    {
        $largest = $k;
        $left = 2 * $k + 1;
        $right = 2 * $k + 2;
        if ($left <= $heapSize && $arr[$left] > $arr[$k]){
            $largest = $left;
        }
        if ($right <= $heapSize && $arr[$right] > $arr[$largest]){
            $largest = $right;
        }
        if ($largest != $k){
            list($arr[$largest], $arr[$k]) = [$arr[$k], $arr[$largest]];
            $arr = self::heapify($largest, $heapSize, $arr);
        }
        return $arr;
    }

}


$arr = [1,3,5,7,9,8,6,4,2];
$result = HeapSort::heapSort($arr);
foreach ($result as $item) {
    echo $item.'-';
}

/**
 * To have a good idea what you can do with SplHeap, I created a little example script that will show the rankings of Belgian soccer teams in the Jupiler League.

<?php
/**
 * A class that extends SplHeap for showing rankings in the Belgian
 * soccer tournament JupilerLeague
 */
class JupilerLeague extends SplHeap     //抽象类需要先继承才能用
{
    /**
     * We modify the abstract method compare so we can sort our
     * rankings using the values of a given array
     */
    public function compare($array1, $array2)   //实现抽象方法
    {
        $values1 = array_values($array1);
        $values2 = array_values($array2);
        if ($values1[0] === $values2[0]) return 0;
        return $values1[0] < $values2[0] ? -1 : 1;
    }
}

// Let's populate our heap here (data of 2009)
$heap = new JupilerLeague();
$heap->insert(array ('AA Gent' => 15));
$heap->insert(array ('Anderlecht' => 20));
$heap->insert(array ('Cercle Brugge' => 11));
$heap->insert(array ('Charleroi' => 12));
$heap->insert(array ('Club Brugge' => 21));
$heap->insert(array ('G. Beerschot' => 15));
$heap->insert(array ('Kortrijk' => 10));
$heap->insert(array ('KV Mechelen' => 18));
$heap->insert(array ('Lokeren' => 10));
$heap->insert(array ('Moeskroen' => 7));
$heap->insert(array ('Racing Genk' => 11));
$heap->insert(array ('Roeselare' => 6));
$heap->insert(array ('Standard' => 20));
$heap->insert(array ('STVV' => 17));
$heap->insert(array ('Westerlo' => 10));
$heap->insert(array ('Zulte Waregem' => 15));

// For displaying the ranking we move up to the first node
$heap->top();

// Then we iterate through each node for displaying the result
while ($heap->valid()) {
    list ($team, $score) = each ($heap->current());
    echo $team . ': ' . $score . PHP_EOL;
    $heap->next();
}
?>

This results in the following output:
Club Brugge: 21
Anderlecht: 20
Standard: 20
KV Mechelen: 18
STVV: 17
Zulte Waregem: 15
AA Gent: 15
G. Beerschot: 15
Charleroi: 12
Racing Genk: 11
Cercle Brugge: 11
Kortrijk: 10
Lokeren: 10
Westerlo: 10
Moeskroen: 7
Roeselare: 6
 */