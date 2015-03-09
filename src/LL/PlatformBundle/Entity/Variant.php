<?php

namespace LL\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LL\PlatformBundle\Entity\VariantRepository")
 */
class Variant
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="LL\PlatformBundle\Entity\Category", inversedBy="variants", cascade={"persist"})
     */

    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="show_from", type="datetime")
     */
    private $showFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="show_to", type="datetime")
     */
    private $showTo;

    /**
     * @var string
     *
     * @ORM\Column(name="special_price", type="decimal")
     */
    private $specialPrice;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }


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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Variant
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return Variant
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Variant
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Variant
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set showFrom
     *
     * @param \DateTime $showFrom
     * @return Variant
     */
    public function setShowFrom($showFrom)
    {
        $this->showFrom = $showFrom;

        return $this;
    }

    /**
     * Get showFrom
     *
     * @return \DateTime 
     */
    public function getShowFrom()
    {
        return $this->showFrom;
    }

    /**
     * Set showTo
     *
     * @param \DateTime $showTo
     * @return Variant
     */
    public function setShowTo($showTo)
    {
        $this->showTo = $showTo;

        return $this;
    }

    /**
     * Get showTo
     *
     * @return \DateTime 
     */
    public function getShowTo()
    {
        return $this->showTo;
    }

    /**
     * Set specialPrice
     *
     * @param string $specialPrice
     * @return Variant
     */
    public function setSpecialPrice($specialPrice)
    {
        $this->specialPrice = $specialPrice;

        return $this;
    }

    /**
     * Get specialPrice
     *
     * @return string 
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }
}
