<?php

namespace App\CrocworkBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OrganizationAdmin extends AbstractAdmin
{
    protected $datagridValues = [
        '_sort_order' => 'DESC',
        '_sort_by' => 'displayName'
    ];

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('displayName')
            ->add('ogrn')
            ->add('oktmo')
            ->add('users')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('displayName')
            ->add('ogrn')
            ->add('oktmo')
            ->add('users')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('displayName')
            ->add('ogrn')
            ->add('oktmo')
            ->add('users')
            ->add('_action', 'actions', [
                'actions' => [
                    'view' => [],
                    'edit' => [],
                    'delete' => [],
                ]
            ])
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('displayName')
            ->add('ogrn')
            ->add('oktmo')
            ->add('users')
        ;
    }
}