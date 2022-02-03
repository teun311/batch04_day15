<?php
namespace App\classes;
class Example
{
     public $firstNumber =10;
     public $firstName;
     public $lastName;
public  function index()
 {
     $this->firstName ="Habibur";
     $this->lastName = "Rahman";
     echo $this->firstNumber;
     echo '<br/>';
     echo $this->firstName;
     echo '<br/>';
     echo $this->lastName;
     echo '<br/>';
     echo $this->firstName.$this->lastName;
     echo '<br/>';

    echo "Hello World!!";
    echo "<br>";
    echo "<br>";
 }
    public function increment(){

        echo '<==string character increment==>'.PHP_EOL;
        echo "<br>";
        $ch='A';
        for ($n=0;$n<25;$n++)
        {
            echo ++$ch .PHP_EOL;

        }
    }
}




