<?php

class Index extends Controller
{


    public function __construct() {}

    public function index()
    {

    
        $slider1 = $this->model->getSlider1();
        $slider2 = $this->model->getSlider2();
        $slider2_item = $slider2[0];
        $date_end = $slider2[1];

        $only_digikala = $this->model->getOnlyDigiKala();
        $most_viewd = $this->model->getMostViewed();
        $last_product = $this->model->getLastProduct();


        $data = [$slider1, $slider2_item, $date_end, $only_digikala, $most_viewd, $last_product];

        $this->view('index/index', $data);
    }

    public function getSlidesJson()
    {
        $sliderData = $this->model->getSlides();
        header('Content-Type: application/json');
        echo json_encode($sliderData);
    }
}
