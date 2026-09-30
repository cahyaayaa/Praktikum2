<?php

class Kendaraan
{
    // Property
    public $nomor;
    public $merk;
    public $jenis;

    // Method
    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Jenis : " . $this->jenis . "<br>";
    }

    public function statusKendaraan()
    {
        return "Tersedia";
    }
}


class Pelanggan
{
    // Property
    public $id;
    public $nama;
    public $alamat;

    // Method
    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
    }

    public function sewaKendaraan()
    {
        return "Kendaraan berhasil disewa";
    }
}


// ==========================
// DATA KENDARAAN 1
// ==========================

$kendaraan1 = new Kendaraan();

$kendaraan1->nomor = "K001";
$kendaraan1->merk = "Honda Brio";
$kendaraan1->jenis = "Mobil";


// ==========================
// DATA KENDARAAN 2
// ==========================

$kendaraan2 = new Kendaraan();

$kendaraan2->nomor = "K002";
$kendaraan2->merk = "Toyota Innova Reborn";
$kendaraan2->jenis = "Mobil";


// ==========================
// DATA PELANGGAN 1
// ==========================

$pelanggan1 = new Pelanggan();

$pelanggan1->id = "P001";
$pelanggan1->nama = "Cahya";
$pelanggan1->alamat = "Mojosari";


// ==========================
// DATA PELANGGAN 2
// ==========================

$pelanggan2 = new Pelanggan();

$pelanggan2->id = "P002";
$pelanggan2->nama = "Giandra";
$pelanggan2->alamat = "Mojokerto";


// ==========================
// TAMPILAN
// ==========================

echo "<h1>SISTEM RENTAL KENDARAAN</h1>";

echo "<h2>Kendaraan 1</h2>";
$kendaraan1->tampilkanData();
echo "Status : " . $kendaraan1->statusKendaraan();

echo "<hr>";

echo "<h2>Kendaraan 2</h2>";
$kendaraan2->tampilkanData();
echo "Status : " . $kendaraan2->statusKendaraan();

echo "<hr>";

echo "<h2>Pelanggan 1</h2>";
$pelanggan1->tampilkanData();
echo "Status : " . $pelanggan1->sewaKendaraan();

echo "<hr>";

echo "<h2>Pelanggan 2</h2>";
$pelanggan2->tampilkanData();
echo "Status : " . $pelanggan2->sewaKendaraan();

?>