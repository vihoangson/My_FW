<?php

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ArrayCache,
    Doctrine\DBAL\Logging\EchoSQLLogger;

class Doctrine {
    public $em = null;

    public function __construct() {
        // load database configuration from CodeIgniter
        require_once APPPATH . 'config/database.php';
        // ensure standard doctrine annotations are registered
        Doctrine\Common\Annotations\AnnotationRegistry::registerFile(
            __DIR__.'/../../vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php'
        );


        // Set up class loading. You could use different autoloaders, provided by your favorite framework,
        // if you want to.
//        require_once APPPATH.'../libraries/Doctrine/Common/lib/doctrine/common/ClassLoader.php';

        // require Softdeleable Annotation.
        require_once __DIR__.'/../../vendor/gedmo/doctrine-extensions/lib/Gedmo/Mapping/Annotation/SoftDeleteable.php';


        $doctrineClassLoader = new ClassLoader( 'Doctrine', APPPATH . 'libraries' );
        $doctrineClassLoader->register();
        $entitiesClassLoader = new ClassLoader( 'models', rtrim( APPPATH, "/" ) );
        $entitiesClassLoader->register();
        $proxiesClassLoader = new ClassLoader( 'Proxies', APPPATH . 'models/proxies' );
        $proxiesClassLoader->register();


        $entityClassloader = new ClassLoader( 'Entity', APPPATH . 'models' );
        $entityClassloader->register();


        // Set up caches
        $config = new Configuration;
        $cache  = new ArrayCache;
        $config->setMetadataCacheImpl( $cache );
        $driverImpl = $config->newDefaultAnnotationDriver( array( APPPATH . 'models/Entity' ) );
        $config->setMetadataDriverImpl( $driverImpl );
        $config->setQueryCacheImpl( $cache );

        $config->setQueryCacheImpl( $cache );

        // Proxy configuration
        $config->setProxyDir( APPPATH . '/models/proxies' );
        $config->setProxyNamespace( 'Proxies' );

        // Set up logger
        $logger = new EchoSQLLogger;
        $config->setSQLLogger( $logger );

        $config->setAutoGenerateProxyClasses( true );
        if ( ! isset( $db['default'] ) ) {
            $db['default'] = array(
                'dsn'          => '',
                'hostname'     => 'localhost',
                'username'     => 'root',
                'password'     => '',
                'database'     => 'hanbai',
                'dbdriver'     => 'mysqli',
                'dbprefix'     => '',
                'pconnect'     => false,
                'db_debug'     => ( ENVIRONMENT !== 'production' ),
                'cache_on'     => false,
                'cachedir'     => '',
                'char_set'     => 'utf8',
                'dbcollat'     => 'utf8_general_ci',
                'swap_pre'     => '',
                'encrypt'      => false,
                'compress'     => false,
                'stricton'     => false,
                'failover'     => array(),
                'save_queries' => true,

            );
        }
        // Database connection information
        $connectionOptions = array(
            'driver'        => 'pdo_mysql',
            'user'          => $db['default']['username'],
            'password'      => $db['default']['password'],
            'host'          => $db['default']['hostname'],
            'dbname'        => $db['default']['database'],
            'charset'       => $db['default']['char_set'],
            'driverOptions' => array(
                'charset' => $db['default']['char_set'],
            ),
        );

        $config->addFilter('soft-deleteable', 'Gedmo\SoftDeleteable\Filter\SoftDeleteableFilter');


        // Third, create event manager and hook prefered extension listeners
        $evm = new Doctrine\Common\EventManager();

        $annotationReader = new Doctrine\Common\Annotations\AnnotationReader();

        $softDeleteableListener = new \Gedmo\SoftDeleteable\SoftDeleteableListener;
        $softDeleteableListener->setAnnotationReader($annotationReader);
        $evm->addEventSubscriber($softDeleteableListener);



        // Create EntityManager
        $this->em = EntityManager::create( $connectionOptions, $config,$evm);
        $this->em->getFilters()->enable('soft-deleteable');

    }
}