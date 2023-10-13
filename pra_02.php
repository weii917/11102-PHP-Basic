<h2>九九乘法表</h2>
<?php
// for ($i = 1; $i <= 9; $i++) {
//     echo '1 x' . $i . '=' . (1 * $i) . "<br>";
// }
// 
?>

<?php
for ($j = 1; $j <= 9; $j++) {

    for ($i = 1; $i <= 9; $i++) {
        echo  $j . ' x ' . $i . ' = ' . ($j * $i) . "&nbsp&nbsp&nbsp";
        // echo "<br>";
    }
    echo "<br>";}


?>