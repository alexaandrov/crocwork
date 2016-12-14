<?php

namespace App\CrocworkBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin
{
    protected $datagridValues = [
        '_sort_order' => 'ASC',
        '_sort_by'    => 'name'
    ];

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('lastname')
            ->add('firstname')
            ->add('middlename')
            ->add('inn')
            ->add('snils')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('lastname')
            ->add('firstname')
            ->add('middlename')
            ->add('inn')
            ->add('snils')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('lastname')
            ->add('firstname')
            ->add('middlename')
            ->add('inn')
            ->add('snils')
            ->add('_action', 'actions', [
                'actions' => [
                    'view' => [],
                    'edit' => [],
                    'delete' => [],
                ]
            ])
        ;
    }
}