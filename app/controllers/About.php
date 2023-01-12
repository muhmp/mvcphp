<?php

require_once 'core/Controller.php';

//class
class About extends Controller
{

    //method index as default 
    public function index($name = 'Mamet', $job = 'Software engineering', $age = 27)
    {
        $this->view('about/index');
    }
    //method
    public function page()
    {
        $this->view('about/page');
    }
}
