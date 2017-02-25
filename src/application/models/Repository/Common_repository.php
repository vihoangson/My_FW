<?php
// repositories/AddressRepository.php
//namespace Entity;
namespace Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping;
use Entity\Product;
use Doctrine\ORM\EntityRepository;
use UnexpectedValueException;

/**
 *
 **/
class Common_repository extends EntityRepository {
    public function __construct( EntityManager $em, Mapping\ClassMetadata $class ) {
        parent::__construct( $em, $class );
    }

    public function findBy( array $criteria, array $orderBy = null, $limit = null, $offset = null ) {
        return parent::findBy( $this->fixCriteria( $criteria ) );
    }

    public function findOneBy( array $criteria, array $orderBy = null ) {
        return parent::findOneBy( $this->fixCriteria( $criteria ) );
    }

    public function find( $id, $lockMode = \Doctrine\DBAL\LockMode::NONE, $lockVersion = null ) {
        return $this->findOneBy( array(
            'id' => $id,
        ) );
    }

    private function fixCriteria( array $criteria ) {
        //Unless explicitly requested to return deleted items, we want to return non-deleted items by default
        if ( ! in_array( 'disable', $criteria ) ) {
            $criteria['disable'] = false;
        }

        return $criteria;
    }


    /**
     * @param $entity
     *
     * @return bool
     */
    public function remove( $entity ) {


        if ( $entity->getDisable() == 0 ) {
            $entity->setDisable( 1 );
            $entity->setUpdateDatetime( new \DateTime( date( 'Y-m-d H:i:s' ) ) );
        }
        else{
            throw new UnexpectedValueException("Can not remove this record : not existed or not allowed ");
        }

    }

}
