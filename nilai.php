<?php

// Define the scores
$nilai = [80, 78, 72, 84, 92, 88];

$nilaiawal = $nilai;

// Calculate the highest score
$nilaitertinggi = max($nilai);

// Calculate the lowest score
$nilaiterendah = min($nilai);

// Sort the scores in ascending order
($nilai);

// Sort the scores in descending order
arsort($nilai);

// Calculate the average score
$ratarata = round(array_sum($nilai) / count($nilai));

// Replace the lowest score with 75
$key = array_search(72, $nilaiawal);
if ($key !== false) {
    $nilaiperbaikan = $nilaiawal; 
    $nilaiperbaikan[$key] = 75;
}

$remed = $nilaiperbaikan;

// Sort the scores in descending order after replacing the lowest score
arsort($nilaiperbaikan);

// Print the output in the desired format
echo "Nilai saya: " . implode(", ", $nilaiawal) ;
echo "<br>";
echo "Dari keseluruhan nilai yang paling tinggi ialah : $nilaitertinggi" ;
echo "<br>";
echo "Sedangkan nilai yang paling kecil : $nilaiterendah"  ;
echo "<br>";
echo "Apabila diurutkan dari yang terkecil menjadi : " . implode(", ", array_reverse($nilai)) ;
echo "<br>";
echo "Apabila diurutkan dari yang terbesar menjadi : " . implode(", ", $nilai) ;
echo "<br>";
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : $ratarata" ;
echo "<br>";
echo "Setelah melakukan perbaikan untuk nilai $nilaiterendah, saya mendapat nilai 75. Jadi nilai saya sekarang : " . implode(", ", $remed) . PHP_EOL;
echo "<br>";
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : " . implode(", ", $nilaiperbaikan) ;