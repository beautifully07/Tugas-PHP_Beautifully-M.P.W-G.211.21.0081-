<?php 

require_once("Lat4_5a.php");

$s = new Sarjana;
$s->getProgram ('Mahasiswa') . "<br>";
$s->TugasAkhir ();

$m = new Magister;
$m->getProgram ('Mahasiswa') . "<br>";
$m->TugasAkhir ();
?>