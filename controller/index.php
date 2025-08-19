<?php

class Index extends Controller
{


    public function __construct() {}

    public function index()
    {
      
        echo $this->model->test();
        // $this->view('index/index');
    }

    public function sayHello($name = '', $family = '')
    {
        echo $name . ' ' . $family;
    }
}
