<?php

//class
class Student_model
{
    //array
    private $std = [
        [
            "name" => "Person 1",
            "ID" => "001",
            "email" => "matt1@gmail.com",
            "occupation" => "engineer"
        ],

        [
            "name" => "Person 2",
            "ID" => "002",
            "email" => "person2@gmail.com",
            "occupation" => "pilot"
        ],

        [
            "name" => "Person 3",
            "ID" => "003",
            "email" => "person3@gmail.com",
            "occupation" => "Doctor"
        ],
    ];


    //method to get the data
    public function getAllStudent()
    {
        return $this->std;
    }
}
