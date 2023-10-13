<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;

    }

    td {
        border: 1px solid black;
        padding: 3px 9px;
    }   
</style>
<h2>以表格九九乘法表</h2>
<?php
echo "<table>";
for ($j = 1; $j <= 9; $j++) {
    echo "<tr>";
    for ($i = 1; $i <= 9; $i++) {
        echo "<td>";
        echo  $j . ' x ' . $i . ' = ' . ($j * $i) . "&nbsp&nbsp&nbsp";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>以交叉九九乘法表</h2>
<?php
echo "<table>";

for ($j = 0; $j < 10; $j++) {   
    if($j == 0){
        echo "<tr style='background:#eee'>";
    }  else{
        echo "<tr>";
    }          
    for ($i = 0; $i < 10; $i++) {   
        if($i == 0){
            echo "<td style='background:#eee'>";
        }  else{
            echo "<td>";
        }   
       
        if($j == 0 && $i == 0){
            echo ""; //i 跟 j都是 0 就印空的       
        }else if($j == 0){
            echo $i; //知道第一行j=0只要印出i列 印最上層1~9
        }        
        else if($i == 0){
            echo $j; //知道第一列i=0只要印出j行 印最左層1~9
        }else{
            echo $j * $i;            
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>以交叉九九乘法表留左下</h2>
<?php
echo "<table>";

for ($j = 0; $j < 10; $j++) {   
    if($j == 0){
        echo "<tr style='background:#eee'>";
    }  else{
        echo "<tr>";
    }          
    for ($i = 0; $i < 10; $i++) {   
        if($i == 0){
            echo "<td style='background:#eee'>";
        }  else{
            echo "<td>";
        }   
       
        if($j == 0 && $i == 0){
            echo "";            
        }else if($j == 0){
            echo $i;
        }        
        else if($i == 0){
            echo $j;
        }else if( $j < $i){
            echo ""; //當左攔j < 上列會印出空         
        }else{
            echo $j * $i;            
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>