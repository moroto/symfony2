<?php

namespace Acme\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\Bundle\TestBundle\Entity\Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\Bundle\TestBundle\Entity\PostRepository")
 */
class Post
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string $body
     *
     * @ORM\Column(name="body", type="string", length=255)
     */
    private $body;

    /**
     * @var date $postDate
     *
     * @ORM\Column(name="post_date", type="date")
     */
    private $postDate;


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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Set body
     *
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
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
     * Set postDate
     *
     * @param date $postDate
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    }

    /**
     * Get postDate
     *
     * @return date 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }
}
