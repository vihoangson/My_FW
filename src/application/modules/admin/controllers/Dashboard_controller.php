<?php
/**
 * @property My_Blade $my_blade
*/
class Dashboard_controller extends WK_Controller{

    function __construct(){
        parent::__construct();
        $this->load->library( 'my_blade' ,__DIR__);
        $this->my_blade->share('tamp', false);
    }

    /**
     * Index Dashboard controller
     */
    function index(){
        echo $this->my_blade
            ->render( 'dashboard.index', array(
                'title_page' => 'Lampart page title!',
                'content_page' => 'Content !!!!'
            ) );

    }

    /**
     * Search Dashboard controller
     * @param null $param_test_route
     */
    public function search($param_test_route = null){
        if($param_test_route ){
            echo "<h1>$param_test_route</h1>";
        }
        echo "Search !!!";
    }

    /**
     * Login Dashboard controller
     */
    public function login() {
        echo $this->my_blade
        ->render( 'dashboard.login', array(
                'title_page' => 'Lampart page title!',
                'content_page' => 'Content !!!!'
        ) );
    }
}

?>