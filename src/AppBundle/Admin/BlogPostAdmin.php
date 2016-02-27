<?php
// src/AppBundle/Admin/BlogPostAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;


use AppBundle\Entity\BlogPost;

class BlogPostAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
      $formMapper
          ->with('Content')
              ->add('title', 'text')
              ->add('body', 'textarea')
              ->add('draft', 'textarea')
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
            ->addIdentifier('title')
            ->add('category.name')
            ->add('draft')
        ;
    }



    public function toString($object)
    {
        return $object instanceof BlogPost
            ? $object->getTitle()
            : 'Blog Post'; // shown in the breadcrumb on the create view
    }
}
?>
