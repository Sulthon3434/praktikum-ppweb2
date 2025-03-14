<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $semester;

    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNim($nim){
        $this->nama = $nim;
    }
    public function setSemester($semester){
        $this->nama = $semester;
    }
}

$budi = new Mahasiswa();
$budi -> setNama = 'Ahmad Sulthon';
$budi -> setNim = '0110221234';
$budi -> setSemester = 2;


?>