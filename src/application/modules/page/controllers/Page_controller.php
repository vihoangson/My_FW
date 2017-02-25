<?php

class Page_controller extends \WK_Controller
{
    function __construct(){
        parent::__construct();
    }

    public function index($m =null){
        $this->my_blade->view("page");
    }

}