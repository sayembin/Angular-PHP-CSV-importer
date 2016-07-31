<?php
namespace Models\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="Models\Repository\ProductRepository")
 * @ORM\Table(name="Product")
 */
class Product
{

    /**
     * @var string $name
     *
     * @ORM\Column(type="text", length=255, nullable=true)
     */
    protected $name;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    /**
     * @ORM\OneToMany(targetEntity="Feature", mappedBy="product")
     */
    private $features;

    public function __construct()
    {
        $this->features = new ArrayCollection();
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * set the date
     */
    public function setDate()
    {
        $this->date = new \DateTime("now");
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}


