<?php
class bola
{
    public $rusuk;
    public $phi = 3.14;
    

    function volume()
    {
        return 4/3 * $this->phi * ($this->rusuk * $this->rusuk * $this->rusuk);
    }

    function luas_sisi()
    {
        return 4 * $this->phi * ($this->rusuk * $this->rusuk );
    }
 }

$objekbola = new bola;
$objekbola->rusuk = 10;

echo $objekbola->volume();
echo "<br>";
echo $objekbola->luas_sisi();
