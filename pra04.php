<h2>直角三角形</h2>
<?php 
// echo "*<br>";
// echo "**<br>";
// echo "***<br>";
// echo "****<br>";
// echo "*****<br>";
// echo "<hr>";

// for($i=0;$i<5;$i++){
//     echo "*<br>";
// }

$amount = 20;
for($i = 0;$i <= $amount-1; $i++){//外層印幾行 0~4 五行
    for($j = 0;$j <= $i; $j++){//內層這一行要印幾顆星星
        echo "*";        
    }
    echo "<br>";
}

?>
<h2>倒直角三角形</h2>

<?php
for($i = $amount-1;$i >= 0; $i--){ //外層印幾行 4~0 五行
    for($j = 0;$j <= $i; $j++){ //內層這一行要印幾顆星星
        echo "*";        
    }
    echo "<br>";
}
?>


<style>
    *{
        font-family: 'Courier New', Courier, monospace;
        line-height: 16px;
    }
</style>
<!-- <h2>三角形</h2> -->
<?php 
// $h = 5;
// for($i = 0;$i < $h; $i++){//外層印幾行 0~4 五行
    // 計算左側空格的數量
    // $space = $h - $i;
    // 計算星號的數量
    // $star = 2 * $i+1;
    // 輸出左側空格
    // for($j = 0; $j <$space; $j++){
        // echo "&nbsp;";
    // }
    // 輸出星號
    // for($k = 0; $k <$star; $k++){
        // echo "*";
    // }
    // echo "<br>";
// }
?>
<h2>正三角形</h2>
<?php
for($i=0;$i<$amount;$i++){
    for($j=0;$j<($amount-1-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>
<h2>倒三角形</h2>
<?php
for($i=$amount-1;$i>=0;$i--){
    for($j=0;$j<($amount-1-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>

<h2>菱形</h2>
<?php    

$mid=floor(($amount*2-1)/2);
for($i=0;$i<=$amount*2-1;$i++){

    if($i<=$mid){
        $tmp=$i;
       
    }else{
        $tmp--;               
    }
    
    for($j=0;$j<($mid-$tmp);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($tmp*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>
<h2>矩形</h2>
<?php    
    for($i=0;$i<$amount;$i++){
        for($j=0;$j<$amount;$j++){
            if($i==0 || $i==$amount-1){
               echo "*";  
            }else if($j==0 || $j==$amount-1){
               echo "*";  
            }
            else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }   
?>
<h2>矩形</h2>
<?php    
    for($i=0;$i<$amount;$i++){
        for($j=0;$j<$amount;$j++){
            if($i==0 || $i==$amount-1){
               echo "*";  
            }else if($j==0 || $j==$amount-1 || $j==$i || $i+$j == $amount-1){
               echo "*";  
            }
            else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }   
?>

<h2>矩形</h2>
<?php    
    for($i=0;$i<$amount;$i++){
        for($j=0;$j<$amount;$j++){
            if($i==0 || $i==$amount-1){
               echo "*";  
            }else if($j==0 || $j==$amount-1){
               echo "*";                
            }else if($j==$i || $i+$j == $amount-1){
                echo "<span style = 'color:red'>*</span>";
            }
            else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }   

?>
