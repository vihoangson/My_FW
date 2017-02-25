<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2/25/2017
 * Time: 12:29 AM
 * @property \My_blade $my_blade
 */

class Test_blade_template_controller extends \WK_Controller
{
    function __construct(){
        parent::__construct();
    }

    /**
     * @link http://hanbai.vn/campaign/Test_blade_template_controller/index
     */
    public function index()
    {
        $this->my_blade->share(['fff'=>'adfadf']);
        $this->my_blade->view('test_lib',["ddd"=>"fff"]);
    }

}