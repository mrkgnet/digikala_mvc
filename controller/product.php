<?php
class Product extends Controller
{
    /**
     * Class constructor.
     */
    function __construct()
    {
    }
    
    public function index() {
       
        $this->view('product/index');
    }


}

?>