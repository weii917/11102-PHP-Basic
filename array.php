<?php
// $a=array();

//預設鍵值0,1,2,3.....
$a=[];
$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[2];
echo '<br>';
echo $a[0];
echo "<hr>";

//輸入鍵值
$b=[];
$b['姓名']='徐唯庭';
$b['最高學歷']='大學';
$b['tel']='0231477887';
$b['性別']='女生';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['tel'];
echo "<hr>";

$c=[];
$c['name'] = '徐唯庭';
$c['interest'] = ['跑步','玩','看書'];
echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo $c['interest'][0];
echo $c['interest'][1];


?>