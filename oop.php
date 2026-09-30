<?php

class Mahasiswa
{
    // Property (Praktikum 2)
    public $nim;
    public $nama;
    public $prodi;
    public $semester;
 
    // Method (Praktikum 6)
    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br><br>";
    }
}
 
// Praktikum 3 & 4 
$mhs1 = new Mahasiswa();
$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;
 
// Praktikum 5
$mhs2 = new Mahasiswa();
$mhs2->nim = "23002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 2;
 
//  Praktikum 6:
echo "Data Mahasiswa 1:<br>";
$mhs1->tampilkanData();
 
echo "Data Mahasiswa 2:<br>";
$mhs2->tampilkanData();
?>