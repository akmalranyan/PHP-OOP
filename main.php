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

// class Circle{
//     public const PI = 3.14;
//     public function surface($jari){
//         echo self::PI * $jari * $jari;
//     }
// }

// $circle = new Circle;
// echo Circle::PI;
// echo PHP_EOL;
// $circle->surface(10);
// echo PHP_EOL;


// //penggunaan $this 
// class printer{
//     private $content;
//     public function setContent($content){
//         $this->content = $content;
//     }
//     public function cetak(){
//         echo $this->content;
//     }
// }

class Lingkaran{
    private $PI = 3.14;
    public function luas($jari){
      echo $this->PI * $jari * $jari;
    }
    public function phi(){
        echo $this->PI;
    }
}
$lingkaran = new lingkaran();
echo $lingkaran->luas(10);
echo $lingkaran->phi();
?>