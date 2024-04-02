<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;
    public $grade;
    public $predikat;

    function __construct($nim, $nama, $kuliah, $matkul, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul;
        $this->nilai = $nilai;

        // Hitung grade
        if ($nilai >= 85) {
            $this->grade = 'A';
            $this->predikat = 'Sangat Memuaskan';
        } elseif ($nilai >= 75) {
            $this->grade = 'B';
            $this->predikat = 'Memuaskan';
        } elseif ($nilai >= 60) {
            $this->grade = 'C';
            $this->predikat = 'Cukup';
        } elseif ($nilai >= 40) {
            $this->grade = 'D';
            $this->predikat = 'Kurang';
        } else {
            $this->grade = 'E';
            $this->predikat = 'Sangat Kurang';
        }
    }

    // Metode untuk mendapatkan status
    public function getHasil() { 
        if ($this -> nilai >= 65) return " Lulus";
        else return " Tidak Lulus";
    }
}

?>
