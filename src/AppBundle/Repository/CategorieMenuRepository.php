<?php

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class CategorieMenuRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('position' => 'ASC'));
    }
}