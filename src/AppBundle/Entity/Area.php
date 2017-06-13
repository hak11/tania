<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="areas")
 */
class Area
{
    /**
     * Many Areas have One Reservoirs
     * @ORM\ManyToOne(targetEntity="Reservoir", inversedBy="areas")
     * @ORM\JoinColumn(name="reservoir_id", referencedColumnName="id")
     */
    private $reservoir;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    private $name;
    
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $growingMethod;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $capacity;
    
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $measurementUnit;

    /**
     * @ORM\Column(type="text", nullable=TRUE)
     */
    private $photoUrl;

    /**
     * @ORM\Column(type="datetime", nullable=TRUE)
     * @Assert\Type("\DateTime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Type("\DateTime")
     */
    private $createdAt;

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
     *
     * @return Area
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
     * Set growingMethod
     *
     * @param integer $growingMethod
     *
     * @return Area
     */
    public function setGrowingMethod($growingMethod)
    {
        $this->growingMethod = $growingMethod;

        return $this;
    }

    /**
     * Get growingMethod
     *
     * @return integer
     */
    public function getGrowingMethod()
    {
        return $this->growingMethod;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Area
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set measurementUnit
     *
     * @param integer $measurementUnit
     *
     * @return Area
     */
    public function setMeasurementUnit($measurementUnit)
    {
        $this->measurementUnit = $measurementUnit;

        return $this;
    }

    /**
     * Get measurementUnit
     *
     * @return integer
     */
    public function getMeasurementUnit()
    {
        return $this->measurementUnit;
    }

    /**
     * Set photoUrl
     *
     * @param string $photoUrl
     *
     * @return Area
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    /**
     * Get photoUrl
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Area
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Area
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
     * Set reservoir
     *
     * @param \AppBundle\Entity\Reservoir $reservoir
     *
     * @return Area
     */
    public function setReservoir(\AppBundle\Entity\Reservoir $reservoir = null)
    {
        $this->reservoir = $reservoir;

        return $this;
    }

    /**
     * Get reservoir
     *
     * @return \AppBundle\Entity\Reservoir
     */
    public function getReservoir()
    {
        return $this->reservoir;
    }
}