<?php
// repositories/AddressRepository.php
//namespace Entity;
namespace Repository;
use Entity\Product;
use Doctrine\ORM\EntityRepository;

/**
 *
 **/
class Address_repository extends EntityRepository
{

    public function getAllProduct()
    {
        return $this->_em->createQuery('SELECT u FROM Entity\Product u')
                         ->getResult();
    }

    public function insert_address() {


    }
}
