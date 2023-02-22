<?php

//class
class Student_model
{
    //define the variable
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data source name
        $dbh = 'mysql:host=localhost;dbname=mvcphp';

        //check
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException) {
            die($e->getMessage());
        }
    }



    //method to get the data
    public function getAllStudent()
    {
        //return $this->student;

        $this->stmt = $this->dbh->prepare('SELECT * FROM Student');
    }
}
