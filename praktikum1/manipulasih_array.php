<?php
$arrayBuah = ['Pepaya','Mangga','Jambu','Durian'];
//mengurutkan array
sort($arrayBuah);
//menghapus nilai array paling belakang
array_pop($arrayBuah);

unset($arrayBuah[1]);

array_push($arrayBuah,'Apel');

array_shift($arrayBuah);

array_unshift($arrayBuah,'Kelapa');

foreach($arrayBuah as $buah) {
    echo $buah . "<br>";
}