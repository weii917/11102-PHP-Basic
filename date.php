<h3>日期與時間</h3>
<?php

date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("jS");
echo "<br>";
echo date("");
?>

<h3>Strtotime，給定兩個日期，計算中間間隔天數</h3>
<?php

$time = strtotime("now");
echo date("Y-m-d H:i:s", $time);
echo "<br>";

$date1 = '2023-10-24';
$date2 = '2023-11-15';
$days = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);
echo '2023-10-24 與 2023-11-15相差' . $days . "天";
?>

<h3>計算距離自己下一次生日還有幾天</h3>
<?php

$date = '1995-09-17';
$br = strtotime($date);
$today = strtotime('now');
$diff = strtotime(date("Y") . "-" . date("m-d", $br));
if ($diff > $today) {
    $days = ($diff - $today) / (60 * 60 * 24);
} else {
    $diff = strtotime("+1 year", $diff);
    $days = ($diff - $today) / (60 * 60 * 24);
}
echo "距離下一次生日:" . date("Y-m-d", $diff) . "還有" . floor($days) . "天";
?>

<h3>利用date()函式的格式化參數，完成以下的日期格式呈現</h3>
<ul>
    2021/10/05
    10月5日 Tuesday
    2021-10-5 12:9:5
    2021-10-5 12:09:05
    今天是西元2021年10月5日 上班日(或假日)</ul>
<?php
echo date("Y/m/d");
echo "<br>";
echo date("m月d日 1");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y-n-j G:i:s");
echo "<br>";



echo date("今天是西元Y年m月d日");
if (date('N') < 6) {
    echo "上班日";
} else {
    echo "假日";
}
?>

<h3>利用迴圈來計算連續五個周一的日期</h3>
<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>
<?php
$todayweek = date("N");
$diff = 1 - $todayWeek;
$lastMonday = strtotime("$diff")


?>