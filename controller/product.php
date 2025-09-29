<?php
class Product extends Controller
{
    public function __construct() {}
    public function index($id)
    {
        $productInfo = $this->model->productInfo($id);
        $onlyDigikala = $this->model->getOnlyDigiKala();
        $data = ['productInfo' => $productInfo , 'onlyDigikala' => $onlyDigikala];

       

        $this->view('product/index', $data);
    }
}
