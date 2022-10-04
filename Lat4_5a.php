<?php 

abstract class Mahasiswa {
    abstract protected function getTugasAkhir ();
    abstract protected function getProgram ($postfix);

    public function TugasAkhir () {
        print $this->getTugasAkhir () . "<br>";
    }
}

class Sarjana extends Mahasiswa {
    protected function getTugasAkhir () {
        return "Skripsi";
    }

    public function getProgram ($postfix) {
        print "($postfix) S1";
    }
}

class Magister extends Mahasiswa {
    public function getTugasAkhir () {
        return "Tesis";
    }

    public function getProgram ($postfix) {
        print "($postfix) S2";
    }
}
?>