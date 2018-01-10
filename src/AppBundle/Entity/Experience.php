<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity
 */
class Experience
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=50, nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="content1", type="text", nullable=true)
     */
    private $content1;

    /**
     * @var string
     *
     * @ORM\Column(name="content2", type="text", nullable=true)
     */
    private $content2;

    /**
     * @var string
     *
     * @ORM\Column(name="content3", type="text", nullable=true)
     */
    private $content3;

    /**
     * @var string
     *
     * @ORM\Column(name="content4", type="text", nullable=true)
     */
    private $content4;

    /**
     * @var string
     *
     * @ORM\Column(name="content5", type="text", nullable=true)
     */
    private $content5;

    /**
     * @var string
     *
     * @ORM\Column(name="content6", type="text", nullable=true)
     */
    private $content6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_experience", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExperience;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Experience
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
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Experience
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Experience
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Experience
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Get idExperience
     *
     * @return integer
     */
    public function getIdExperience()
    {
        return $this->idExperience;
    }

    /**
     * Set content1
     *
     * @param string $content1
     *
     * @return Experience
     */
    public function setContent1($content1)
    {
        $this->content1 = $content1;

        return $this;
    }

    /**
     * Get content1
     *
     * @return string
     */
    public function getContent1()
    {
        return $this->content1;
    }

    /**
     * Set content2
     *
     * @param string $content2
     *
     * @return Experience
     */
    public function setContent2($content2)
    {
        $this->content2 = $content2;

        return $this;
    }

    /**
     * Get content2
     *
     * @return string
     */
    public function getContent2()
    {
        return $this->content2;
    }

    /**
     * Set content3
     *
     * @param string $content3
     *
     * @return Experience
     */
    public function setContent3($content3)
    {
        $this->content3 = $content3;

        return $this;
    }

    /**
     * Get content3
     *
     * @return string
     */
    public function getContent3()
    {
        return $this->content3;
    }

    /**
     * Set content4
     *
     * @param string $content4
     *
     * @return Experience
     */
    public function setContent4($content4)
    {
        $this->content4 = $content4;

        return $this;
    }

    /**
     * Get content4
     *
     * @return string
     */
    public function getContent4()
    {
        return $this->content4;
    }

    /**
     * Set content5
     *
     * @param string $content5
     *
     * @return Experience
     */
    public function setContent5($content5)
    {
        $this->content5 = $content5;

        return $this;
    }

    /**
     * Get content5
     *
     * @return string
     */
    public function getContent5()
    {
        return $this->content5;
    }

    /**
     * Set content6
     *
     * @param string $content6
     *
     * @return Experience
     */
    public function setContent6($content6)
    {
        $this->content6 = $content6;

        return $this;
    }

    /**
     * Get content6
     *
     * @return string
     */
    public function getContent6()
    {
        return $this->content6;
    }
}
