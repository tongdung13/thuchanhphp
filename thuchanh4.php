<?php

// Viết hàm tính tổng các số trong mảng, in ra kết quả.
// - Có hàm tính tổng các thành phần trong mảng
// - Gọi hàm và in ra kết quả

$abs = array(1,2,4,6,7,8,9);
echo "sum =" . array_sum($abs)."<br>";



$adc = array(1,3,4,6,8,9,5,7);
 sort($adc);
 foreach ($adc as $v) {
     echo "$v <br>";
 }
?>