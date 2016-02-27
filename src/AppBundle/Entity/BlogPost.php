<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogPost
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class BlogPost
{
  /**
  id
  */
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
/**
title
*/
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    /**
     * Set title
     *
     * @param string $title
     * @return BlogPost
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
/**
body
*/
    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;
    /**
    * Set body
    *
    * @param string $body
    * @return BlogPost
    */
    public function setBody($body)
    {
      $this->body = $body;
      return $this;
    }

    /**
    * Get body
    *
    * @return string
    */
    public function getBody()
    {
      return $this->body;
    }

/**
draft
*/
    /**
     * @var boolean
     *
     * @ORM\Column(name="draft", type="boolean")
     */
    private $draft;
    /**
     * Set draft
     *
     * @param boolean $draft
     * @return BlogPost
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;

        return $this;
    }
    /**
     * Get draft
     *
     * @return boolean
     */
    public function getDraft()
    {
        return $this->draft;
    }
/**
Link to parent entity
*/
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="blogPosts")
     */
    private $category;

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
