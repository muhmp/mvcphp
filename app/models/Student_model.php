<?php

//Define class called Student model
class Student_model
{
    //define two properties 
    private $dbh; //database handler
    private $stmt; // Statement

    //Define a constructor for initialize database connection
    public function __construct()
    {
        //data source name : to connect to MYSQL Database
        $dsn = 'mysql:host=localhost;dbname=mvcphp';

        //catch any errors that occur
        try {
            $this->dbh = new PDO($dsn, 'root', ''); // create a new PDO object with DSN, username, password
        } catch (PDOException $e) { // catch any PDO exceptions that occur
            die($e->getMessage()); // display the error message and stop the script
        }
    }



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
