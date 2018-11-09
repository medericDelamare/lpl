<?php


namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CategorieAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('nom')
            ->add('code')
            ->add('position');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('nom')
            ->add('code');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('nom')
            ->add('code')
            ->add('position');
    }
}