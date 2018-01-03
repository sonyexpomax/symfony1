<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Laptop
 *
 * @ORM\Table(name="laptop")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LaptopRepository")
 */
class Laptop
{
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\LaptopComments", mappedBy="laptop")
     * @ORM\OrderBy({"createdAt" = "DESC"})
     */
    private $comment;

    /**
     * @var int
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
     * @var string
     *
     * @ORM\Column(name="images", type="text")
     */
    private $images;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="display", type="string", length=255)
     */
    private $display;

    /**
     * @var string
     *
     * @ORM\Column(name="hdd", type="string", length=128)
     */
    private $hdd;

    /**
     * @var string
     *
     * @ORM\Column(name="rom", type="string", length=128)
     */
    private $rom;

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=255)
     */
    private $os;

    /**
     * @var bool
     *
     * @ORM\Column(name="lan", type="boolean")
     */
    private $lan;

    /**
     * @var bool
     *
     * @ORM\Column(name="wifi", type="boolean")
     */
    private $wifi;

    /**
     * @var bool
     *
     * @ORM\Column(name="bluetooth", type="boolean")
     */
    private $bluetooth;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="web_cam", type="string", length=255)
     */
    private $webCam;

    /**
     * @var string
     *
     * @ORM\Column(name="processor", type="string", length=255)
     */
    private $processor;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;


    /**
     * Get id
     *
     * @return int
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
     * @return Laptop
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
     * Set images
     *
     * @param string $images
     *
     * @return Laptop
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Laptop
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Laptop
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set display
     *
     * @param string $display
     *
     * @return Laptop
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set hdd
     *
     * @param string $hdd
     *
     * @return Laptop
     */
    public function setHdd($hdd)
    {
        $this->hdd = $hdd;

        return $this;
    }

    /**
     * Get hdd
     *
     * @return string
     */
    public function getHdd()
    {
        return $this->hdd;
    }

    /**
     * Set rom
     *
     * @param string $rom
     *
     * @return Laptop
     */
    public function setRom($rom)
    {
        $this->rom = $rom;

        return $this;
    }

    /**
     * Get rom
     *
     * @return string
     */
    public function getRom()
    {
        return $this->rom;
    }

    /**
     * Set os
     *
     * @param string $os
     *
     * @return Laptop
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set lan
     *
     * @param boolean $lan
     *
     * @return Laptop
     */
    public function setLan($lan)
    {
        $this->lan = $lan;

        return $this;
    }

    /**
     * Get lan
     *
     * @return bool
     */
    public function getLan()
    {
        return $this->lan;
    }

    /**
     * Set wifi
     *
     * @param boolean $wifi
     *
     * @return Laptop
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get wifi
     *
     * @return bool
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set bluetooth
     *
     * @param boolean $bluetooth
     *
     * @return Laptop
     */
    public function setBluetooth($bluetooth)
    {
        $this->bluetooth = $bluetooth;

        return $this;
    }

    /**
     * Get bluetooth
     *
     * @return bool
     */
    public function getBluetooth()
    {
        return $this->bluetooth;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return Laptop
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get �weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Laptop
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set webCam
     *
     * @param string $webCam
     *
     * @return Laptop
     */
    public function setWebCam($webCam)
    {
        $this->webCam = $webCam;

        return $this;
    }

    /**
     * Get webCam
     *
     * @return string
     */
    public function getWebCam()
    {
        return $this->webCam;
    }

    /**
     * Set processor
     *
     * @param string $processor
     *
     * @return Laptop
     */
    public function setProcessor($processor)
    {
        $this->processor = $processor;

        return $this;
    }

    /**
     * Get processor
     *
     * @return string
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Laptop
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return ArrayCollection|LaptopComments[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    public function __construct()
    {
        $this->comment = new ArrayCollection();
    }
}

