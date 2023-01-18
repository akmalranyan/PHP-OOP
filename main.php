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
echo '<br>';
echo lion::run();
echo '<br>';
echo lion::run4();
echo '<br>';
echo lion::run2();
echo '<br>';
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
echo '<br>';
$circle->surface(10);
echo '<br>';


//penggunaan $this 
class printer{
    private $content;
    public function setContent($content){
        $this->content = $content;
    }
    public function cetak(){
        echo $this->content;
        echo '<br>';
    }
}

class Lingkaran{
    private $PI = 3.14;
    public function luas($jari){
      return $this->PI * $jari * $jari;
    }
    public function phi(){
        echo $this->PI;
        echo '<br>';
    }
}
$lingkaran = new lingkaran();
$test = $lingkaran->luas(10);
echo '<br>';
echo $test;
echo '<br>';
echo $lingkaran->phi();
echo '<br>';

//contstructor
class Fruit{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    //destructor
    // function __destruct()
    // {
    //     echo 'lmao dek';
    // }

    function getName(){
        return $this->name;
    }
}

$apple = new Fruit("Apel");
echo '<br>';
echo $apple->getName();
echo '<br>';


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
echo '<br>';
echo $angka->getAngka1() + $angka->getAngka2();
echo '<br>';


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
echo '<br>';
echo $tiger->getJenis();
echo '<br>';
echo $messi->getJenis();
echo '<br>';

//Polymorphism

class Hewan{
    public function sound(){
        echo 'test suara hewan';
        echo '<br>';
    }
}

class Duck extends Hewan{
    public function sound(){
        echo 'suara bebek wkwkwk';
        echo '<br>';
    }
}
class Cat extends Hewan{
    public function sound(){
        echo 'suara kucing miao';
        echo '<br>';
    }
}

$duck = new Duck;
$cat = new Cat;

$duck->sound();
$cat->sound();

$hewan = new Hewan;
$hewan->sound();


//override
class Bmw{
    public $wheels;
    public function getWheels(){
        return $this->wheels;
    }
    public function setTotalWheels($wheels){
        $this->wheels = $wheels;
    }
}

class ModifBmw extends Bmw{
    public function setTotalWheels($wheels){
        for($i=1; $i<=$wheels; $i++){
            echo $i.PHP_EOL;
        }
        parent::setTotalWheels($wheels);

        $juarapl = ['emyu','emyu','emyu'];
        foreach($juarapl as $juara){
            echo "siapa yang juara?? jelas $juara";
        };
        $num = 10;
        while(true){
            echo "angka ke-$num";
            $num++; 
            if($num>50){
                break;
            }
        }
        $namas = ['mal','mall','faiq'];
        foreach($namas as $nama){
            echo "nama saya $nama";
        }
    }

}

$modif = new ModifBmw;
$modif->setTotalWheels(6);
echo '<br>';
echo $modif->getWheels();
echo '<br>';

class Josverstappen{
    public $anger;
    public function getanger(){
       return $this->anger;
    }
    public function setanger($anger){
        $this->anger = $anger;
    }
}

class Maxverstappen extends Josverstappen{
    public function setanger($anger){
        parent::setanger($anger);
        for($i=1; $i<=10; $i++){
            echo $i;
        }
    }
}

$max = new Maxverstappen;
$max->setanger('bad');
echo '<br>';
echo $max->getanger();
echo '<br>';

//abstract class

abstract class Vehicle{
  private $wheels;
  abstract public function drive();  
  public function setWheels($wheels){
    $this->wheels = $wheels;
  }
}

class Mobil extends Vehicle{
    public function drive(){
        //menjalankan kendaraan
      }    
}

class Motorcycle extends Vehicle{
    public function drive(){
        //menjalankan kendaraan
      }    
}

$car = new Car;
$car->drive();
$motor = new Motorcycle;
$motor->drive();

abstract class calculate{
    public $a;
    public $b;
    abstract public function calculate();
}

class Multiple extends calculate{
    public $a;
    public $b;
    public function __construct($a, $b){
        $this->a=$a;
        $this->b=$b;
    }
    public function calculate(){
        return $this->a*$this->b;
}
}
class Divide extends calculate{
    public $a;
    public $b;
    public function __construct($a, $b){
        $this->a=$a;
        $this->b=$b;
    }
    public function calculate(){
        return $this->a/$this->b;
}
}
$multiple = new Multiple(2,7);
echo '<br>';
echo $multiple ->calculate();
echo '<br>';
$divide = new Divide(8, 4);
echo $divide ->calculate();
echo '<br>';

//interface
interface Kendaraan{
    public function drive();
    public function setWheels($wheels);
}

interface Body{
    public function setSurface($surface);
}

class Bugatti implements Kendaraan, Body{
    public $surface;
    public $wheels;
    public function drive(){
        //menjalankan mobil
    }
    public function setWheels($wheels){
        $this->wheels = $wheels;
    }
    public function setSurface($surface){
        $test = $this->surface = $surface;
    }
}

class Ferrari implements Kendaraan, Body{
    public $surface;
    public $wheels;
    public function drive(){
        //menjalankan mobil
    }
    public function setWheels($wheels){
        $this->wheels = $wheels;
    }
    public function setSurface($surface){
       $test = $this->surface = $surface;
    }
}

interface kali{
    public function perkalian(string $a, $b);
}
interface bagi{
    public function pembagian(string $a, $b);
}
interface tambah{
    public function pertambahan(string $a, $b);
}
interface kurang{
    public function pengurangan(string $a, $b);
}

class kalibagi implements kali, bagi{
    public $a;
    public $b;
    public function perkalian(string $a, $b){
        $this->a=$a;
        $this->b=$b;
        return $this->a*$this->b;
}
public function pembagian(string $a, $b){
    $this->a=$a; 
    $this->b=$b;
    return $this->a/$this->b;
}

}
class tambahkurang implements tambah, kurang{
    public $a;
    public $b;
    public function pertambahan(string $a, $b){
        $this->a=$a;
        $this->b=$b;
        return $this->a+$this->b;
}
public function pengurangan(string $a, $b){
    $this->a=$a;
    $this->b=$b;
    return $this->a-$this->b;
}
}
$kali = new kalibagi();
echo $kali ->perkalian(2,7);
echo '<br>';
$bagi = new kalibagi();
echo $bagi -> pembagian(8, 4);
echo '<br>';
$tambah = new tambahkurang();
echo $tambah ->pertambahan(6, 3);
echo '<br>';
$kurang = new tambahkurang();
echo $kurang ->pengurangan(6,4);
echo '<br>';

//method chaining

class Robot{
    public $suara;
    public $berat;
    public function setSuara($suara){
        $this -> suara = $suara;
        return $this;
    }
    public function setBerat($berat){
        $this -> berat = $berat;
        return $this;
    }
}


$robot = new Robot;
$robot -> setSuara('method chaining') -> setBerat(10);
echo $robot -> suara. '-'. $robot -> berat;
echo '<br>';


//Scalar type hinting

class ParameterCasting{
    public function __construct(array $arrayType){}
    public function StringCast(string $stringType){}
    public function intCast(int $intType){}
    public function floatCast(float $floatType){}
    public function booleanCast(bool $booleanType){}
}

$object = new ParameterCasting(array());


//object type hinting

class Post{
    public $title;
    public $content;
    public function __construct(?string $title, $content)
    {
        $this -> title = $title;
        $this -> content = $content;
    }

    public function getTitle() :int{
        return $this -> title;
    }

    public function getContent() :int{
        return $this -> content;
    }
}

class StringMutator{
    public static function bold(?string $word){
        return sprintf('<b>%s</b>', $word);
    }
    public static function italic(?string $word){
        return sprintf('<i>%s</i>', $word);
    }
    public static function underlined(?string $word){
        return sprintf('<u>%s</u>', $word);
    }
    public static function strike(?string $word){
        return sprintf('<strike>%s</strike>', $word);
    }
}

class PostMutator extends StringMutator{
    public $post;
    public function __construct(Post $post)
    {
        $this -> post = $post;
    }

    public function getBoldTitle(){
        return parent::bold($this -> post -> getTitle());
    }
    public function getItalicTitle(){
        return parent::italic($this -> post -> getTitle());
    }
    public function getUnderlinedTitle(){
        return parent::underlined($this -> post -> getTitle());
    }
    public function getStrikeContent(){
        return parent::strike($this -> post -> getContent());
    }
}

$post = new Post(true, false);
$mutator = new PostMutator($post);
echo $mutator -> getBoldTitle().' '.$mutator ->getItalicTitle().' '.$mutator ->getUnderlinedTitle().' '.$mutator ->getStrikeContent();
echo '<br>';

//factorial non-recursive
class Factorial{
    public static function nonRecursive(int $number){
        $result = 1;
        for($i = 1; $i <= $number; $i++){
            //operator assignment
            $result *= $i;
        }
        return $result;
    }
    //factorial recursive
    public static function Recursive(int $number){
        if(2>$number){
            return $number;
        }else{
            return $number*self::Recursive($number-1);
        }
    }
}

echo Factorial::nonRecursive(5);
echo'<br>';
echo Factorial::Recursive(5);
echo'<br>';

// recursive stack overflow
function loop(int $value){
    if($value == 0){
        echo 'selesai';
    }else{
        echo 'perulangan ke-'.$value;
        loop($value-1);
    }
}
loop(10);
echo '<br>';

//recursive fibonacci
class Fibonacci{
    public static function calculate(int $limit){
        if(0===$limit || 1 ===$limit){
            return $limit;
        }
        if(2===$limit){
            return 1;
        }
        return self::calculate($limit-1)+self::calculate($limit-2);
    }
}
echo Fibonacci::calculate(4);
echo '<br>';

//late static binding
class stringMutate{
    public static function Bolding(string $word):string{
        return sprintf('<b>%s</b>', $word);
    }
    public static function Italicin(string $word):string{
        return sprintf('<i>%s</i>', $word);
    }
    public static function BoldItalic(string $word):string{
        return self::Bolding(static::Italicin($word));
    }
}

class childMutator extends stringMutate{
    public static function Bolding(string $word):string{
        return '<b>STATIC LATE BINDING</b>';
    }
    public static function Italicin(string $word):string{
        return '<i>STATIC LATE BINDING</i>';
    }
}

echo childMutator::BoldItalic('Yessir');
echo '<br>';


//trait
trait SayHello{
    public function SayHello(){
        echo 'Hello';
        return $this;
    }
}

trait SayGoodbye{
    public function SayGoodbye(){
        echo 'byee';
        return $this;
    }
}

trait Greets{
    use SayHello, SayGoodbye;
}

class Message{
    use Greets;
}



$Message = new Message();
$Message -> SayHello() -> SayGoodbye(); 

//exception handling
function CheckNum($num1, $num2){
    if($num1 == 0 || $num2 == 0){
        throw new Exception('Value must be 1 or above');
    }else{
        return $num1 % $num2;
    }
}

try{
    CheckNum(10, 0);
}catch(Exception $e){
    echo'<br>';
    echo 'Error in'.$e->getMessage();
}

//closure-lambda-anonymous function
function Introduce($fullname, $action){
    $fullname = $action($fullname);
    return "Perkenalkan Nama Saya $fullname";
}

echo introduce('althaf', function ($fullname){
    return strtoupper($fullname);
});
echo '<br>';


function Nama($namanya, $bold){
    $namanya = $bold($namanya);
    return "Nama ana $namanya";
}

echo Nama('Akmal', function ($namanya){
    return sprintf("<b>$namanya</b>");
});
echo '<br>';

function Name($namefull, $aksi1, $body, $body2){
    $body = $aksi1($body);
    return "My Name is $namefull, Im a $body $body2 man";
}

echo Name('Wayne Rooney', function($body){
    return sprintf("<strike>$body</strike>");
}, 'slim', 'fat')

?>