<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="page")
 */
class Page {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $slug;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * Getter for id
     * 
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter for title
     * 
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Getter for title
     * 
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter for date
     * 
     * @param \DateTime $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Getter for date
     * 
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Setter for content
     * 
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Getter for content
     * 
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Setter for slug
     * 
     * @param string $slug
     * @return self
     */
    public function setSlug($slug) 
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Getter for slug
     * 
     * @return string
     */
    public function getSlug() 
    {
        return $this->slug;
    }

}
