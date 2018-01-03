<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablet
 *
 * @ORM\Table(name="tablet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TabletRepository")
 */
class Tablet
{

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
     * @ORM\Column(name="image", type="string", length=512)
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1024)
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
     * @ORM\Column(name="display_resolution", type="string", length=255)
     */
    private $displayResolution;

    /**
     * @var string
     *
     * @ORM\Column(name="hdd", type="string", length=255)
     */
    private $hdd;

    /**
     * @var string
     *
     * @ORM\Column(name="rom", type="string", length=255)
     */
    private $rom;

    /**
     * @var string
     *
     * @ORM\Column(name="webcam", type="string", length=255)
     */
    private $webcam;

    /**
     * @var string
     *
     * @ORM\Column(name="processor", type="string", length=255)
     */
    private $processor;

    /**
     * @var string
     *
     * @ORM\Column(name="processor_friquency", type="string", length=255)
     */
    private $processorFriquency;


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
     * @return Tablet
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
     * Set image
     *
     * @param string $image
     *
     * @return Tablet
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Tablet
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
     * @return Tablet
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
     * @return Tablet
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
     * Set displayResolution
     *
     * @param string $displayResolution
     *
     * @return Tablet
     */
    public function setDisplayResolution($displayResolution)
    {
        $this->displayResolution = $displayResolution;

        return $this;
    }

    /**
     * Get displayResolution
     *
     * @return string
     */
    public function getDisplayResolution()
    {
        return $this->displayResolution;
    }

    /**
     * Set hdd
     *
     * @param string $hdd
     *
     * @return Tablet
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
     * @return Tablet
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
     * Set webcam
     *
     * @param string $webcam
     *
     * @return Tablet
     */
    public function setWebcam($webcam)
    {
        $this->webcam = $webcam;

        return $this;
    }

    /**
     * Get webcam
     *
     * @return string
     */
    public function getWebcam()
    {
        return $this->webcam;
    }

    /**
     * Set processor
     *
     * @param string $processor
     *
     * @return Tablet
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
     * Set processorFriquency
     *
     * @param string $processorFriquency
     *
     * @return Tablet
     */
    public function setProcessorFriquency($processorFriquency)
    {
        $this->processorFriquency = $processorFriquency;

        return $this;
    }

    /**
     * Get processorFriquency
     *
     * @return string
     */
    public function getProcessorFriquency()
    {
        return $this->processorFriquency;
    }
}

