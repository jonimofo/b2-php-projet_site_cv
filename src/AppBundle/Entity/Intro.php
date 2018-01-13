<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intro
 *
 * @ORM\Table(name="intro")
 * @ORM\Entity
 */
class Intro
{
    /**
     * @var string
     *
     * @ORM\Column(name="phrase_intro", type="text", nullable=false)
     */
    private $phraseIntro;

    /**
     * @var string
     *
     * @ORM\Column(name="about_me", type="text", nullable=false)
     */
    private $aboutMe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_intro", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIntro;



    /**
     * Set phraseIntro
     *
     * @param string $phraseIntro
     *
     * @return Intro
     */
    public function setPhraseIntro($phraseIntro)
    {
        $this->phraseIntro = $phraseIntro;

        return $this;
    }

    /**
     * Get phraseIntro
     *
     * @return string
     */
    public function getPhraseIntro()
    {
        return $this->phraseIntro;
    }

    /**
     * Set aboutMe
     *
     * @param string $aboutMe
     *
     * @return Intro
     */
    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;

        return $this;
    }

    /**
     * Get aboutMe
     *
     * @return string
     */
    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * Get idIntro
     *
     * @return integer
     */
    public function getIdIntro()
    {
        return $this->idIntro;
    }

    public function __toString()
    {
        return (string) $this->phraseIntro;
    }
}
