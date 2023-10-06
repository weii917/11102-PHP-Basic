<?php
//宣告變數
$sum = 0;
$i = 1;

while ($i <= 100) {
    //將目前數字加到總和
    $sum += $i;
    //增加計數器
    $i++;
}
echo "1加到100的總和是:" . $sum;
echo "<hr>";

$sum = 0;
$i = 1;

while ($i <= 100) {
   
echo '當$i='.$i.'時';
 //將目前數字加到總和'
    $sum += $i;
    //增加計數器
    $i++;
    
echo '$sum=$i的結果是';
echo $sum . '+' . $i . '=' . $sum+$i;
echo "<br>";
}
echo "1加到100的總和是:" . $sum;
?>
