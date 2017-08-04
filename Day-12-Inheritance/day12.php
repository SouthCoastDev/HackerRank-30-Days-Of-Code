<?php // tags not required in challenge.
class Student extends person {
    private $testScores;

    /*
    *   Class Constructor
    *
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here

        public function __construct($firstName,$lastName,$id,$scores){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
        $this->testScores = $scores;
        }

    /*
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate(){

       $average = array_sum($this->testScores) / count($this->testScores);

        if($average<40){
            $average = "T";
        } else if($average<55){
            $average = "D";
        }else if($average<70){
            $average = "P";
        }else if($average<80){
            $average = "A";
        }else if($average<90){
            $average = "E";
        }else if($average<=100){
            $average = "O";
        }
       return $average;
    }
}


?> // tag not required in challenge.
