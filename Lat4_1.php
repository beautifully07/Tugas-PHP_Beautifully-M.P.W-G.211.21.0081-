<?php
class Mobil {
    public $nama;
    public $merk;

    function getInfo () {
        echo "Nama mobil: " .$this->nama. "<br/>";
        echo "Merk: " .$this->merk. "<br/>";
    }
}

$ferari=new Mobil ();
$ferari->nama="xxx";
$ferari->merk="aaa";

$ferari->getInfo ();
?>