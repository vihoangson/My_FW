<?php
// repositories/ShippingRepository.php
//namespace Entity;
namespace Repository;

use Doctrine\ORM\Query\ResultSetMapping;
use Entity\Product;
use Doctrine\ORM\EntityRepository;

/**
 *
 **/
class Shipping_repository extends EntityRepository {

    public function getAllShipping() {
        return $this->_em->createQuery( 'SELECT u FROM Entity\Shipping u' )
                         ->getResult();
    }

    public function sub() {


        $rsm = new ResultSetMapping;
        $rsm->addEntityResult( 'Entity\Shipping', 'Entity\Shipping' );
        $rsm->addFieldResult( 'Entity\Shipping', 'id', 'id' ); // ($alias, $columnName, $fieldName)
        $rsm->addFieldResult( 'Entity\Shipping', 'name', 'name' ); // // ($alias, $columnName, $fieldName)

        $query = $this->_em->createNativeQuery( 'SELECT id, name FROM shipping WHERE id = ?', $rsm );
        $query->setParameter( 1, '1' );

        $users = $query->getResult();

        return $users;

//        $rsm = new ResultSetMapping();
////        $rsm->addEntityResult('Entity\Shipping','Shipping');
//        $query =  $this->_em->createNativeQuery('SELECT  * FROM Shipping ', $rsm );
//
//        return $query->getResult();

    }
}
