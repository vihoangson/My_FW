<?php

use campaign\Services\Shipping_service;

defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

/**
 * Class Shipping_controller
 * @author quoc_trinh
 * 2017-02-17
 */
class Shipping_controller extends \WK_Controller {

    function __construct() {
        parent::__construct();
        parent::require_services( __DIR__ , 'campaign','Shipping');
    }

    public function sub() {
        $shipping_service = new Shipping_service();
        $shipping_service->sub();
        unset( $shipping_service );
    }

    public function index() {
        $shipping_service = new Shipping_service();
        $shipping_service->index();
        unset( $shipping_service );
    }

    public function acc() {
        $shipping_service = new Shipping_service();
        $shipping_service->acc();
        unset( $shipping_service );
    }
    public function get() {
        $shipping_service = new Shipping_service();
        $shipping_service->get();
        unset( $shipping_service );
    }

    public function insert_shipping() {
        $input = $this->input->get();
        if ($input['name'] ) {
            $shipping_service = new Shipping_service();
            $shipping_service->insert_shipping( $input['name'] );
            unset( $shipping_service );
        }
    }

    public function get_all_shippings(  ) {
        $shipping_service = new Shipping_service();
        $shipping_service->get_all_shippings();
    }

    public function insert_address(  ) {
        $shipping_service = new Shipping_service();
        $shipping_service->insert_address();
        
    }
    public function remove_product(  ) {
        $shipping_service = new Shipping_service();
        $shipping_service->remove_product();

    }
}