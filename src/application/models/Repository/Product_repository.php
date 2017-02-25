<?php
// repositories/ProductRepository.php
//namespace Entity;
namespace Repository;
use Entity\Product;
use Doctrine\ORM\EntityRepository;

/**
 *
 **/

require_once (__DIR__.'/Common_repository.php');
class Product_repository extends Common_repository
{

    public function getAllProduct()
    {
        return $this->_em->createQuery('SELECT u FROM Entity\Product  u')
                         ->getResult();
    }

}
