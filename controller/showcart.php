<?php
    class Showcart extends Controller{
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        public function index()
        {
            $this->view('showcart/index');
        }
    
    }



?>