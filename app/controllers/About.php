<?php


//class
class About extends Controller
{

    //method index
    public function index($name = 'Mamet', $job = 'Software engineering', $age = 27)
    {
        $data['name'] = $name;
        $job = urldecode($job); // add space 
        $data['job'] = $job;
        $data['age'] = $age;
        $data['title'] = 'About Me'; //title 

        //call the about/index folder
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    //method page
    public function page()
    {
        $data['title'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
