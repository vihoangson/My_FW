<?php

use campaign\Services\Shipping_service;

defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

/**
 * Class Shipping_controller
 * @author quoc_trinh
 * 2017-02-17
 */
class Account_controller extends \WK_Controller {

    function __construct() {
        parent::__construct();
        parent::require_services( __DIR__ , 'campaign','Shipping');
    }

    public function acc(  ) {
        $ship = new Shipping_service();
       echo $ship->acc();
    }
}