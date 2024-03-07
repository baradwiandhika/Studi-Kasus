<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

echo "<ol>";
foreach ($data as $orang) {
  if ($orang['tahun'] % 4 == 0)  {
        
        echo "<li>" . $orang['nama'] . " : lahir pada tahun kabisat </li>";
    } else {
        
        echo "<li>" . $orang['nama'] . " : lahir BUKAN pada tahun kabisat </li>";
    }
}
echo "</ol>";
?>