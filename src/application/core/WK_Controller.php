<?php ( defined( 'BASEPATH' ) ) OR exit( 'No direct script access allowed' );

/* load the MX_Loader class */
require APPPATH . "third_party/MX/Controller.php";

/**
 * Class WK_Controller
 *
 * @property \Doctrine\ORM\EntityManager $em
 */
class WK_Controller extends MX_Controller {

    public $em;


    /**
     * WK_Controller constructor.
     */
    public function __construct() {
        parent::__construct();

        // Load library Doctrine
        $this->load->library( "Doctrine" );
        $this->em = $this->doctrine->em;

        // Load library My Blade
        $this->load->library("my_blade",$this->load->_module);

        // Load language
        $this->lang->load("common");
        $this->lang->load($this->load->_module);
    }

    /**
     * @param      $dir
     * @param      $module_name
     * @param null $service_file_name
     */
    public function require_services( $dir, $module_name, $service_file_name = null ) {

        if ( $service_file_name != null ) {
            $files = glob( $dir . '/../../../services/' . $module_name . '/' . $service_file_name . '_service.php' );
        } else {
            $files = glob( $dir . '/../../../services/' . $module_name . '/*.php' );
        }
        if ( $files === false ) {
            throw new RuntimeException( "Failed to glob for function files" );
        }

        foreach ( $files as $file ) {
            require_once $file;
        }
        unset( $file );
        unset( $files );
    }

}