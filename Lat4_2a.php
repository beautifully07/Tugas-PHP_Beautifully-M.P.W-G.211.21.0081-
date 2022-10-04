<?php
class Mahasiswa {
    public $nama;
    public $nim;

    function __construct ($a, $b) {
        $this->nama=$a;
        $this->nim=$b;
        echo "Kelas telah dibuat <br/><br/>";
    } 
    function getmahasiswa ($nama, $nim) {
        $this->nama=$nama;
        $this->nim=$nim;
    }

    function cetak () {
        echo $this->nama. "<br/>" .$this->nim. "<br/><br/>";
    }
    function __destruct () {
        echo "Kelas telah dihancurkan";
    }
}