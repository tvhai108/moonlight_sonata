<?php
// src/AppBundle/Admin/BlogPostAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

use AppBundle\Entity\BlogPost;

class ProductAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
      $formMapper
          ->with('Content')
              ->add('name', 'text')
              ->add('price', 'textarea')
              ->add('description', 'textarea')
          ->end()

          ->with('Meta data')
              ->add('category', 'sonata_type_model', array(
                  'class' => 'AppBundle\Entity\Category',
                  'property' => 'name',
              ))
          ->end()
      ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
      $listMapper
          ->add('category.name')
          ->addIdentifier('name')
          ->add('price')
          ->add('description')
      ;
    }
}
?>
