<?php
$sum=0;
for($i=1;$i<=10;$i=$i+1){
    // $sum=$sum+$i;
    echo '當$i='.$i.'時';
    echo '$sum+$i的結果是';
    echo $sum . '+' . $i. '=';
    echo $sum+$i;
    echo"<br>";
    $sum+=$i;
}

echo "1加到100為".$sum;
?>