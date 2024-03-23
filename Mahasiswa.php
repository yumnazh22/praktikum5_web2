<?php

class Mahasiswa {
    private $nama;
    private $nim;
    private $nilai;


    public function __construct($nama, $nim, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim; // Menggunakan properti nim, bukan nama
        $this->nilai = $nilai;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function hasilLulus() {
        return $this->nilai >= 60 ? 'Lulus' : 'Tidak Lulus';
    }

    public function predikat() {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 70) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } else {
            return 'D';
        }
    }
}
?>
