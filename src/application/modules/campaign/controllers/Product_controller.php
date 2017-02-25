<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

/**
 * Class Product_controller
 * @author quoc_trinh
 * 2017-02-17
 *
 *
 */
class Product_controller extends \WK_Controller {

    function __construct() {
        parent::__construct();
    }

    /**
     * Index of Product controller
     * @return void
     *
     * @link /campaign/Product_controller
     */
    public function index() {
        dd($this->em->getRepository("Entity\Product")->getAllProduct());
        echo "Hello world !";
    }


}