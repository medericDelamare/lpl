<?php


namespace AppBundle\Admin;


use AppBundle\Entity\Categorie;
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
            ->add('code')
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
            ])
            ->add('prix')
            ->add('description')
            ->add('position');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('nom')
            ->add('code')
            ->add('position');
    }

    protected function configureListFields(ListMapper  $list)
    {
        $list
            ->addIdentifier('nom')
            ->add('code')
            ->add('position');
    }
}