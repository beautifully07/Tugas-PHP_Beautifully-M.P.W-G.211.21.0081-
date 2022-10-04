<?php 

require_once("Lat4_3a.php");

$mhs1=new Mahasiswa ();
$mhs1->setNama("hendra");
$mhs1->setNim("001253649");

echo ("Nama: " .$mhs1->getNama(). "<br />");
echo ("NIM: " .$mhs1->getNim(). "<br />");
echo "<h3> Sealamat Anda terdaftar sebagai member </h3> <br />";
?>