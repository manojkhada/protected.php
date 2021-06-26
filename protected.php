<?php
// class fruit{
//     public function __construct($name,$color){
//         $this ->name=$name;
//         $this -> color=$color;
//     }
    
//     protected function intro(){
//         // return $this->name . $this->color;
//         echo "this is a {$this->name} and his color is {$this->color}";
//     }
// }
// class strbery extends fruit{
// public function message(){
//     echo "i am  a fruirt or strbery";
//     $this->intro();
// }
// }
// $strbery = new strbery("strabery","red");
// $strbery -> message();


?>
<br>
<br>
<?php
// class goodbye{
//     const live="thanks for waching";
// }
// echo goodbye::live;
?>
<br>
<br>
<?php
// class goodbyes{
// const lives="thanks for leving";
// public function good(){
//     echo self::lives;
// }
// }
// $goodbyes=new goodbyes();
// $goodbyes=good();
?>
<?php
// class Goodbye {
//     const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
//     public function byebye() {
//       echo self::LEAVING_MESSAGE;
//     }
//   }
  
//   $goodbye = new Goodbye();
//   $goodbye->byebye();?>
<?php
abstract class fruit{
public function __construct($name){
    $this->name=$name;
}
abstract public function intro() : string;
}
class apple extends fruit{
 public function intro() : string{
return"this is a $this->name";
}

}
$apple=new apple("apple");
echo $apple->intro();
?>