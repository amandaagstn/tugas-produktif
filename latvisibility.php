<?php
class produk{
  public $namaBarang, 
         $merk;

  protected $harga,
            $diskon;

  public function getCetak(){
    return "$this->merk, (Rp $this->harga)";
  }
  public function __construct($namaBarang="nama barang", $merk="merk", $harga=0){
    $this->namaBarang = $namaBarang;
    $this->merk=$merk;
    $this->harga=$harga;
  }  
    public function cetakInfo(){
        $str="{$this->namaBarang}, {$this->getCetak()}";
        return $str;
    }

  public function getHarga(){
      return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class laptop extends produk{
    public $ukuranLayar;

    public function __construct($namaBarang="nama barang", $merk="merk", $harga=0, $ukuranLayar="ukuran layar", $kapasitas="kapasitas"){ 
      parent ::__construct($namaBarang,$merk,$harga,$ukuranLayar);
      $this->ukuranLayar=$ukuranLayar;
    }
    public function cetakInfo(){
        $str="Laptop: ". parent ::getCetak() . " | Ukuran Layar: {$this->ukuranLayar}";
        return $str;
     }
     public function setdiskon($diskon){
    return $this->diskon=$diskon;
  }

}

class flashdisk extends produk{
  public $kapasitas;

  public function __construct($namaBarang="nama barang", $merk="merk", $harga=0, $ukuranLayar="ukuran layar", $kapasitas="kapasitas"){ 
      parent ::__construct($namaBarang,$merk,$harga,$kapasitas);
      $this->kapasitas=$kapasitas;
    }
      
    public function cetakInfo(){
        $str="Aksesoris: " . parent::getCetak() . " | Kapasitas: {$this->kapasitas}";
        return $str;
    }
   public function setdiskon($diskon){
    return $this->diskon=$diskon;
  }

}

$produk1 = new laptop("Idepad 310","Lenovo",7000000,"14 inci");
$produk2 = new flashdisk("Flasdisk","Sandisk",100000,"8 Gb");


echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>"; 
echo "<hr>";
echo "Hasil Harga Laptop Diskon 50% gan : <br/>";
$produk1->setdiskon(50);
echo $produk1->getHarga();
echo "<br>";
echo "Hasil Harga Flasdisk Diskon 20% gan : <br/>";
$produk2->setdiskon(20);
echo $produk2->getHarga();