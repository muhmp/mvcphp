<?php

//define class
class User_model
{
    //define name var
    private $name = 'Person 1';

    //a method for calling the getuser
    public function getUser()
    {
        //get the getuser
        return $this->name;
    }
}
