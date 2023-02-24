<?php

class Database
{

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    //Define a constructor for initialize database connection
    public function __construct()
    {
        //data source name : to connect to MYSQL Database
        $dsn = 'mysql:host=' . $this->host . '$dbname=' . $this->db_name;


        //option
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        //catch any errors that occur
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option); // create a new PDO object with DSN, username, password
        } catch (PDOException $e) { // catch any PDO exceptions that occur
            die($e->getMessage()); // display the error message and stop the script
        }
    }


    public function query($query)
    {
        //
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        //null
        if (is_null($type)) {
            //switch case
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
}
