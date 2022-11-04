<?php

// Nomor 1
class Buah
{
    public $namaBuah;

    public function set_namaBuah($inputBuah)
    {
        $this->namaBuah = $inputBuah;
    }
    public function get_namaBuah()
    {
        return $this->namaBuah;
    }

}

$Buah_budi = new Buah();

$Buah_budi->set_namaBuah("Mangga");
echo "Budi Suka Buah " . $Buah_budi->get_namaBuah();
echo "<br/>";

// Nomor 2
class Keluarga
{
    // property class keluarga
    public $nama_saya;

    // method pada class keluarga
    public function beriNama($saya)
    {
        $this->nama_saya = $saya;
    }

}

// class turunan atau sub class dari class keluarga
// kita menghubungkan class dengan syntax extends
class Saudara extends Keluarga
{

    // property class saudara
    public $nama_saudara;

    // method pada class saudara
    public function beriNamaSaudara($saudara)
    {
        $this->nama_saudara = $saudara;
    }
}

$nama_orang = new Saudara;

$nama_orang->beriNama(" Meowy ");
$nama_orang->beriNamaSaudara(" Maoyiii ");

echo "Nama Saya :" . $nama_orang->nama_saya . "<br/>";
echo "Nama Saudara Saya : " . $nama_orang->nama_saudara . "<br/>";

// Nomor 3
interface Movie
{
    public function filmKesukaan();
}
class filmKu implements Movie
{
    public function filmKesukaan()
    {
        return " Upin & Upin (film kesukaan anda)<br>";
    }
}

$film = new filmKu();
echo "Film Kesukaan Saya" . $film->filmKesukaan();