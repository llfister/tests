<?php

namespace LL\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LL\PlatformBundle\Entity\CategoryRepository")
 */
class Category
{
	

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="LL\PlatformBundle\Entity\Variant", mappedBy="categoryId", cascade={"remove"})
     */
    private $variants;

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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->variants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add variants
     *
     * @param \LL\PlatformBundle\Entity\Variant $variants
     * @return Category
     */
    public function addVariant(\LL\PlatformBundle\Entity\Variant $variants)
    {
        $this->variants[] = $variants;

        return $this;
    }

    /**
     * Remove variants
     *
     * @param \LL\PlatformBundle\Entity\Variant $variants
     */
    public function removeVariant(\LL\PlatformBundle\Entity\Variant $variants)
    {
        $this->variants->removeElement($variants);
    }

    /**
     * Get variants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVariants()
    {
        return $this->variants;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
