<?php
class Buah
{
    public $namaBuah;
    public $warnaKulit;
    public $rasa;
    public $aroma;

    function __construct($nama, $warna, $taste, $bau)
    {
        $this->namaBuah = $nama;
        $this->warnaKulit = $warna;
        $this->rasa = $taste;
        $this->aroma = $bau;
    }
    function tumbuh()
    {
        return "Buah $this->namaBuah itu tumbuh !";
    }

    function busuk()
    {
        return "Buah $this->namaBuah itu busuk !";
    }
}
$objek = new Buah("Sirsak", "Merah", "Manis", "Harum");
echo $objek->tumbuh();
echo "<br>";
echo $objek->busuk();

// $objekBuah = new Buah;
// echo $objekBuah->namaBuah = "Jeruk";
// echo "<br>";
// echo $objekBuah->warnaKulit = "Oranye";
// echo "<br>";
// echo $objekBuah->rasa = "Manis Asem";
// echo "<br>";
// echo $objekBuah->aroma = "Wangi";
// echo "<br>";
// echo $objekBuah->tumbuh();
// echo "<br>";
// echo $objekBuah->busuk();