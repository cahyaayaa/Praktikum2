<?php

class Mahasiswa
{
    // Property
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    // Method menampilkan data
    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }

    // Method menentukan grade
    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}

// Object pertama
$mhs1 = new Mahasiswa();

$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->nilai = 85;

echo "<b>Data Mahasiswa 1</b><br>";
$mhs1->tampilkanData();

echo "<br>";

// Object kedua
$mhs2 = new Mahasiswa();

$mhs2->nim = "23002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->nilai = 72;

echo "<b>Data Mahasiswa 2</b><br>";
$mhs2->tampilkanData();

?>