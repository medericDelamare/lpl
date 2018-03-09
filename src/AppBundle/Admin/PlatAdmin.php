<?php


namespace AppBundle\Admin;


use AppBundle\Entity\Categorie;
use AppBundle\Entity\Plat;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PlatAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('nom')
            ->add('prix', null, ['required' => false])
            ->add('description', null, ['required' => false])
            ->add('position', null, ['required' => false]);
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('nom')
            ->add('position');
    }

    protected function configureListFields(ListMapper  $list)
    {
        $list
            ->addIdentifier('nom')
            ->add('position');
    }

    public function toString($object)
    {
        return $object instanceof Plat
            ? $object->getNom()
            : 'Plat';
    }
}