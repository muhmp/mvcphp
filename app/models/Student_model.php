<?php

//Define class called Student model
class Student_model
{
    //define two properties 
    private $dbh; //database handler
    private $stmt; // Statement



    //method to get the data. returns all rows from the Student table
    public function getAllStudent()
    {
        //return $this->student;

        //prepare a statement to selecet all rows from Student table
        $this->stmt = $this->dbh->prepare('SELECT * FROM Student');

        //Execute the Statement
        $this->stmt->execute();

        //Fetch all the rows and return them as an associative array
        return $this->stmt->fetchall(PDO::FETCH_ASSOC);
    }
}
