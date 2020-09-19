<?php
class produk{
  public $namaBarang, 
         $merk, 
         $harga,
         $ukuranLayar,
         $kapasitas;

  public function getCetak(){
    return "$this->merk, (Rp $this->harga)";
  }
  public function __construct($namaBarang="nama barang", $merk="merk", $harga=0, $ukuranLayar="ukuran layar", $kapasitas="kapasitas"){
    $this->namaBarang = $namaBarang;
    $this->merk=$merk;
    $this->harga=$harga;
    $this->ukuranLayar=$ukuranLayar;
    $this->kapasitas=$kapasitas;
  }

    public function cetakInfo(){
        $str="{$this->namaBarang}, {$this->getCetak()}";
        return $str;
    }
}

class laptop extends produk{
    public function cetakInfo(){
        $str="Laptop: {$this->namaBarang}, {$this->getCetak()} | Ukuran Layar: {$this->ukuranLayar}";
        return $str;
    }
}

class flashdisk extends produk{
    public function cetakInfo(){
        $str="Aksesoris: {$this->namaBarang}, {$this->getCetak()} | Kapasitas: {$this->kapasitas}";
        return $str;
    }
}

$produk1 = new laptop("Idepad 310","Lenovo",7000000,"14 inci", "-");
$produk2 = new flashdisk("Flasdisk","Sandisk",100000,"-","8 Gb");


echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";