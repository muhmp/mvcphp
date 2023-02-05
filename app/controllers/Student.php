<?php


//class extends to Controller
class Student extends Controller
{

    public function index()
    {

        //Set the title of the page to "Student info"
        $data['title'] = 'Student info';
        $data['std'] = $this->model('Student_model')->getAllStudent();
        //call the view method
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
