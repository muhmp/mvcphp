<?php
//class extends to Controller
class Home extends Controller
{
    //method inside
    public function index()
    {
        $data['title'] = 'Home';
        //model
        $data['name'] = $this->model('User_model')->getUser();  //get user
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
