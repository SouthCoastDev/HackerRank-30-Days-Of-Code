<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
       if($initialAge < 1){
           echo "Age is not valid, setting age to 0.\n";
           $age = 0;
       } else {
           $this->age = $initialAge;
       }

    }
   public  function amIOld(){
            // Do some computations in here and print out the correct statement to the console
       $age = $this->age;
       if($age < 13){
            echo "You are young.\n";
        } else if ($age < 18){
            echo "You are a teenager.\n";
        } else {
            echo "You are old.\n";
        }
    }
   public  function yearPasses(){
          // Increment the age of the person in here
       $this->age ++;
    }


}

//Hacker Rank Testing
$T = intval(fgets(STDIN));
 for($i=0;$i<$T;$i++){
     $age=intval(fgets(STDIN));
     $p=new Person($age);
     $p->amIOld();
     for($j=0;$j<3;$j++){
         $p->yearPasses();
     }
     $p->amIOld();
     echo "\n";

 }
?>
