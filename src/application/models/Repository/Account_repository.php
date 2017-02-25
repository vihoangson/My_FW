<?php
namespace Repository;
use Entity\Account;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
/**
 *
 **/
class Account_repository extends EntityRepository
{
    public function getAll(){
        return $this->_em->createQuery('SELECT u from Entity\Account     u ')->getResult();
    }
    public function getStaffInformation()
    {
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('Entity\Account', 'u');
        $rsm->addFieldResult('u', 'id','id');
        $rsm->addFieldResult('u', 'flc_staff_id','flc_staff_id');
        $rsm->addFieldResult('u', 'name', 'name');
        $query = $this->_em->createNativeQuery('SELECT id,flc_staff_id,,name FROM account',$rsm);
      //  $query = $this->_em->createNativeQuery('SELECT ac.flc_staff_id, ac.name, ac.login_id FROM account ac LEFT JOIN flc_staff fl ON ac.flc_staff_id = fl.staff_id LEFT JOIN authority au ON ac.authority_id = au.id', $rsm);
//         $query->setParameter(1, 'romanb');
        $a = $query->getResult();
        echo '<pre>';
        echo '----------------------------------------------------- <br>';
        print_r($a);
        echo '-------------------- var: <b> $a </b> <br>';
        echo '----------------------------------------------------- <br>';
        echo '</pre>';
        die;
    }
}
