<?php
$profileArray =[ 
    [
        'nama' => "Mohammad Faqih Zain", 
        "kelas" => "TI06", 
        "ipk" => 4, 
        "sudah_lulus" => false 
] ,[
        'nama' => "Mohammad Faqih Zain", 
        "kelas" => "TI06", 
        "ipk" => 4, 
        "sudah_lulus" => false 
    ]
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}