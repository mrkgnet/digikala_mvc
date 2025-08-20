<?php

class Index extends Controller
{


    public function __construct() {}

    public function index()
    {
       $slider1= $this->model->getSlider1();
       $slider2= $this->model->getSlider2();
       $data=[$slider1 ,$slider2];
        $this->view('index/index',$data);
  
    }

   
}
