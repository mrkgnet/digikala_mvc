<?php

class Controller
{
    public $model;


    public function __construct() {}

    public function view($viewUrl, $data = [])
    {
        require('header.php');
        require('view/' . $viewUrl . '.php');
        require('footer.php');
    }


    public function model($modelUrl)
    {
        require('model/model_' . $modelUrl . '.php');
        $classname = 'Model_' . $modelUrl; //Model_index
        new $classname; //new Model_index
        $this->model = new $classname;
    }
}
