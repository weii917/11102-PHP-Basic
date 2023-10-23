<?php


$a = [
    'class' => ['國文', '英文', '數學', '地理', '歷史'],
    'judy' => [95, 64, 70, 90, 84,],
    'amo' => [88, 78, 54, 81, 71,],
    'john' => [45, 60, 68, 70, 62,],
    'peter' => [59, 32, 77, 54, 42,],
    'hebe' => [71, 62, 80, 62, 64,],
];
?>
<h2>利用程式來產生陣列</h2>
<?php
$nine = [];
for ($j = 1; $j <= 9; $j++) {

    for ($i = 1; $i <= 9; $i++) {
        $nine[] = "$j  x  $i =" . ($j * $i);
    }
}

echo "<pre>";
print_r($nine);
echo "</pre>";



foreach ($nine as $idx => $value) {
    echo $value;
    if ($idx % 9 == 8) {
        echo "<br>";
    }
}
?>

<style>
    table{
        border-collapse: collapse;
    }

    table td {
        border: 1px solid #666;
        padding: 5px 9px;
    }
    </style>
<?php
echo "<table>";
foreach ($nine as $idx => $value) {

    if ($idx % 9 == 0) {
        echo "<tr>
        <td>$value</td>";
    }else if($idx % 9 == 8){
         echo"<td>$value</td></tr>";   

    }else{
        echo "<td>$value</td>";
    }
}
echo "</table>";

?>

<?php

$num = rand(1,100);
echo $num;

$arr[] = $num;
print_r($arr);

?>