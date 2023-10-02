<?php

$score = 80;

// $score = $score + 20;
echo "我的成績:" . $score; //.用來連結字串
echo "<br>"; //換行
echo "判斷為:";

if($score>=60){
    echo "及格";
}else{
    echo "不及格";
}

//if 判斷成績範圍level等級
echo "<br>";
if($score>=90 && $score<=100){
    $level = "A";
}
if($score>=80 && $score<=89){
    $level = "B";
}
if($score>=70 && $score<=79){
    $level = "C";
}
if($score>=60 && $score<=69){
    $level = "D";
}
if($score>=0 && $score<=59){
    $level = "E";
}
//注意else並不是必須的，如果沒有加上else區段
//那就表示當條件式為false時，不執行任何程式碼
//再往下執行判斷直到true，執行那一行


//依據上述level結果顯示成績等級為
echo "成績等級為:" . $level;
echo "<br>";

//依據值判斷顯示的文字內容，switch的條件結果必須有明確的值，才能建立選擇的依據
switch ($level) {
    case 'A':
        echo "表現優良，請繼續保持";
        break;
    case 'B':
        echo "值得肯定，還有進步空間";
        break;
    case 'C':
        echo "需要更多的練習";
        break;
    case 'D':
        echo "加強基本訓練";
        break;
    default:
        echo "是否無心學習";
        break;
}