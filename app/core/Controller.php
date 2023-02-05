<?php

class Controller
{
    //method with two parameter with array value
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view .  '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
