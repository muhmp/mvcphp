<?php
//
class Home extends Controller
{
    //method inside
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
