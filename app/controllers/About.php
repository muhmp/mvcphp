<?php


//class
class About extends Controller
{

    //method index
    public function index($name = 'Mamet', $job = 'Software engineering', $age = 27)
    {
        $data['name'] = $name;
        $job = urldecode($job);
        $data['job'] = $job;
        $data['age'] = $age;



        //call the about/index folder

        $this->view('about/index', $data);
    }
    //method
    public function page()
    {
        $this->view('about/page');
    }
}
