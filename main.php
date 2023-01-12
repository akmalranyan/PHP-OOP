<?php 
class car{
    public $wheels;
    public function drive(){
    echo 'mobil berjalan';
    }
}

//instansiasi
$toyota = new Car;
//instansiasi
$yamaha = new Car;
$toyota->wheels = 5;
$yamaha->wheels = 6;
echo $toyota->wheels + $yamaha->wheels;
echo PHP_EOL;
echo $toyota->drive();
echo PHP_EOL;


class cars{
    public function race($arah, $arah2){
        echo 'Mobil berjalan ke arah '.$arah.' '.$arah2;
    }
}

$xenia = new cars();
echo $xenia->race('kanan', 'kiri');




class motor{
    // protected $wheel = 2;
    // public function totalWheel(){
    //     echo $this->wheel;
    // }
}

//inheritance, child menggunakan extends
class yamaha extends motor{
    protected $wheel = 2;
    public function totalWheel(){
        echo $this->wheel;
    }
}

$yamaha = new yamaha;
echo $yamaha->totalWheel();
echo PHP_EOL;


//static concept
class lion{
    public static $KAKI = 5;
    public static function run(){
        echo 'Singa Berlari';
    }
    public static function run2(){
        //bisa langsung dipakai di dalam functionnya, pengganti $this->...
        echo lion::$KAKI;
    }
    public static function run3(){
        echo self::$KAKI;
    }
    public static function run4(){
        echo static::$KAKI;
    }
}

//bedanya cuma makai tanda :: untuk mengaksesnya, gak perlu buat instansiasi
echo lion::$KAKI;
echo PHP_EOL;
echo lion::run();
echo PHP_EOL;
echo lion::run4();
echo PHP_EOL;
echo lion::run2();
echo PHP_EOL;
echo lion::run3();

//const

class Circle{
    public const PI = 3.14;
    public function surface($jari){
        echo self::PI * $jari * $jari;
    }
}

$circle = new Circle;
echo Circle::PI;
echo PHP_EOL;
$circle->surface(10);
echo PHP_EOL;


//penggunaan $this 
class printer{
    private $content;
    public function setContent($content){
        $this->content = $content;
    }
    public function cetak(){
        echo $this->content;
    }
}

class Lingkaran{
    private $PI = 3.14;
    public function luas($jari){
      return $this->PI * $jari * $jari;
    }
    public function phi(){
        echo $this->PI;
    }
}
$lingkaran = new lingkaran();
$test = $lingkaran->luas(10);
echo $test;
echo $lingkaran->phi();

//contstructor
class Fruit{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    //destructor
    function __destruct()
    {
        echo 'lmao dek';
    }

    function getName(){
        return $this->name;
    }
}

$apple = new Fruit("Apel");
echo $apple->getName();


class Number{
    public $angka;
    public $angka2;
    function __construct($angka, $angka2)
    {
        $this->angka = $angka;
        $this->angka2 = $angka2;
    }
    function getAngka1(){
        return $this->angka;
    }
    function getAngka2(){
        return $this->angka2;
    }
}

$angka = new Number(10,50);
echo $angka->getAngka1() + $angka->getAngka2();


//inheritance

class Animal {
    private $jenis;
    public function setJenis($jenis){
        $this->jenis = $jenis;
    }
    public function getJenis(){
        return $this->jenis;
    }
}

class Goat extends Animal {}
class Tiger extends Animal {}
class Messi extends Animal {}

$goat = new Goat;
$tiger = new Tiger;
$messi = new Messi;

$goat->setJenis('herbivora');
$tiger->setJenis('karnivora');
$messi->setJenis('omniman');

echo $goat->getJenis();
echo $tiger->getJenis();
echo $messi->getJenis();

//Polymorphism

class Hewan{
    public function sound(){
        echo 'test suara hewan';
    }
}

class Duck extends Hewan{
    public function sound(){
        echo 'suara bebek wkwkwk';
    }
}
class Cat extends Hewan{
    public function sound(){
        echo 'suara kucing miao';
    }
}

$duck = new Duck;
$cat = new Cat;

$duck->sound();
$cat->sound();

$hewan = new Hewan;
$hewan->sound();

?>