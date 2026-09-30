<?php

class Buku
{
    // Property
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    // Method
    public function tampilkanData()
    {
        echo "Kode Buku : " . $this->kode . "<br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahun . "<br>";
    }
}

// Object pertama
$buku1 = new Buku();

$buku1->kode = "B001";
$buku1->judul = "Pemrograman PHP";
$buku1->penulis = "Andi";
$buku1->tahun = 2024;

echo "<b>Data Buku 1</b><br>";
$buku1->tampilkanData();

echo "<br>";

// Object kedua
$buku2 = new Buku();

$buku2->kode = "B002";
$buku2->judul = "Belajar Pemrograman Web";
$buku2->penulis = "Budi";
$buku2->tahun = 2025;

echo "<b>Data Buku 2</b><br>";
$buku2->tampilkanData();

?>