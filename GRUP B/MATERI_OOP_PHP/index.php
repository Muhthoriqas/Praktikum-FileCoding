<?php
// ThoriqAS
// INFO COMMENT MATERI LAIN(MATERI YANG TIDAK INGIN DI LIHAT) JIKA INGIN MELIHAT SALAH SATU MATERI SAJA

// *TODO: Class, Object, Properti, Method, Setter And Getter
class Kendaraan
{
    public $motor;
    public $mobil;

    public function set_motor($roda2)
    {
        $this->motor = $roda2;
    }
    public function get_motor()
    {
        return $this->motor;
    }

    public function set_mobil($roda4)
    {
        $this->mobil = $roda4;
    }
    public function get_mobil()
    {
        return $this->mobil;
    }

}

$kendaraan_budi = new Kendaraan();
$kendaraan_ciks = new Kendaraan();

$kendaraan_budi->set_motor("Supra X");

$kendaraan_ciks->set_motor("Scoopy");
$kendaraan_budi->set_mobil("BMW");

echo "motor  Budi adalah " . $kendaraan_budi->get_motor();
echo "<br/>";

echo "Mobi  Budi adalah " . $kendaraan_budi->get_mobil();
echo "<br/>";
echo "motor  Cika adalah " . $kendaraan_ciks->get_motor();

// *TODO: Constructor And Destructor
// buat class laptop
class laptop
{

    private $pemilik = "Budi ";
    private $merk = "ROG 555";

    public function __construct()
    {
        echo "Ini berasal dari Constructor Laptop";
    }

    public function hidupkan_laptop()
    {
        return "Hidupkan Laptop $this->merk punyanya $this->pemilik";

    }
    public function __destruct()
    {
        echo "Ini berasal dari Destructor Laptop";
    }
}

// buat objek dari class laptop (instansiasi)
$laptop_andi = new laptop();

echo "<br />";
echo $laptop_andi->hidupkan_laptop();
echo "<br />";

// hapus objek $laptop_andi
unset($laptop_andi);

echo "<br />";
echo "Objek Telah Dihancurkan";

// *TODO: INHERETENCE
//class parent
class Keluarga
{
    // property class keluarga
    public $nama_saya;

    // method pada class keluarga
    function beriNama($saya)
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

class Sepupu extends Saudara
{
    public $nama_sepupu;

    // method pada class saudara
    public function beriNamaSepupu($sepupu)
    {
        $this->nama_sepupu = $sepupu;
    }
}

// instansiasi class saudara
$nama_orang = new Sepupu;

// method beri nama adalah method pada class keluarga, tapi kita bisa mengaksesnya karena telah menghubungkan class sepupu dengan class keluarga dan saudara
$nama_orang->beriNama(" Professor ");
$nama_orang->beriNamaSaudara(" Berlin ");
$nama_orang->beriNamaSepupu(" Tokyo ");

// menampilkan isi property
echo "Nama Saya :" . $nama_orang->nama_saya . "<br/>";
echo "Nama Saudara Saya : " . $nama_orang->nama_saudara . "<br/>";
echo "Nama Sepupu Saya : " . $nama_orang->nama_sepupu;

// *TODO: Abstract Class

abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

// Child classes
class Audi extends Car
{
    public function intro(): string
    {
        return "if you are a german choose $this->name!";
    }
}

class Avanza extends Car
{
    public function intro(): string
    {
        return "if you have an Indonesian choose $this->name!";
    }
}

// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$avanza = new Avanza("Avanza123");
echo $avanza->intro();

// *TODO: INTERFACE
interface Animal
{
    public function makeSound();
}
class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow <br>";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bark SUIIIIII <br>";
    }
}

$cat = new Cat();
$dog = new Dog();
$animals = array($dog, $cat);

foreach ($animals as $animal) {
    $animal->makeSound();
}

// *TODO: TRAITS
trait message1
{
    public function msg1()
    {
        echo "OOP is fun! ";
    }
}

trait message2
{
    public function msg2()
    {
        echo "OOP fun banget hehe!";
    }
}

class Welcome
{
    use message1;
}

class Welcome2
{
    use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();

// *TODO: Static

class newLaptop
{
    public $merk;
    public $pemilik;

    // static property
    public static $harga_beli;

    //static method
    public static function beli_laptop()
    {
        return "Beli laptop seharga Rp" . self::$harga_beli;
    }
}

// set static property
newLaptop::$harga_beli = 4000000;

// get static property
echo "harga beli : Rp" . newlaptop::$harga_beli;

echo "<br />";

// panggil static method
echo newLaptop::beli_laptop();