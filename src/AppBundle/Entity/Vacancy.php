<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="vacancy")
 */
class Vacancy
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
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $urlKey;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $locale;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $keywords;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\Column(type="text", length=350, nullable=true)
     */
    protected $vacancy_short_text;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $vacancy_text;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $vacancy_title;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $image;


    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $h1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $h3;



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
     * @return mixed
     */
    public function getUrlKey()
    {
        return $this->urlKey;
    }

    /**
     * @param mixed $urlKey
     */
    public function setUrlKey($urlKey)
    {
        $this->urlKey = $urlKey;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param mixed $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return mixed
     */
    public function getVacancyShortText()
    {
        return $this->vacancy_short_text;
    }

    /**
     * @param mixed $vacancy_short_text
     */
    public function setVacancyShortText($vacancy_short_text)
    {
        $this->vacancy_short_text = $vacancy_short_text;
    }

    /**
     * @return mixed
     */
    public function getVacancyText()
    {
        return $this->vacancy_text;
    }

    /**
     * @param mixed $vacancy_text
     */
    public function setVacancyText($vacancy_text)
    {
        $this->vacancy_text = $vacancy_text;
    }

    /**
     * @return mixed
     */
    public function getVacancyTitle()
    {
        return $this->vacancy_title;
    }

    /**
     * @param mixed $vacancy_title
     */
    public function setVacancyTitle($vacancy_title)
    {
        $this->vacancy_title = $vacancy_title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getH1()
    {
        return $this->h1;
    }

    /**
     * @param mixed $h1
     */
    public function setH1($h1)
    {
        $this->h1 = $h1;
    }

    /**
     * @return mixed
     */
    public function getH3()
    {
        return $this->h3;
    }

    /**
     * @param mixed $h3
     */
    public function setH3($h3)
    {
        $this->h3 = $h3;
    }
}

