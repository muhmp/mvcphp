<?php

//define class
class User_model
{
    //define name var
    private $name = 'Person';

    //a method for calling the getuser
    public function getUser()
    {
        //get the getuser
        return $this->name;
    }
}
