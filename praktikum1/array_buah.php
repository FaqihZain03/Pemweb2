<?php
$arrayBuah = ['Pepaya','Mangga','Jambu','Durian'];
// cetak buah ke index ke 2
echo $arrayBuah [2];
// cetak jumlah buah
echo '<br/>Jumlah Buah ' . count($arrayBuah);
// cetak seluruh buah 
echo '<ol>';
foreach($arrayBuah as $buah){
    echo '<li>'. $buah .'</li>';
}
echo '</ol>';
// tambahkan buah
$arrayBuah[]="Durian";
// hapus buah index ke 1
unset($arrayBuah[1]);
// ubah buah index ke 2 menjadi Manggis
$arrayBuah[2]="Manggis";
// cetak seluruh buah dengan index nya
echo '<ul>';
foreach($arrayBuah as $k => $v){
echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
}
echo '</ul>';
?>