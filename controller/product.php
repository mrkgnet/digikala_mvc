<?php
class Product extends Controller
{
    public function __construct() {}
    public function index($id)
    {
        $productInfo = $this->model->productInfo($id);     
       
        $data = ['productInfo'=>$productInfo];
          
       $this->view('product/index', $data);
    }
}
