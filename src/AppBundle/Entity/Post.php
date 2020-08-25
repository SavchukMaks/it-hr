<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */

class Post
{

    const TEMPLATE_404 = 'page-404.html.twig';

    static protected $teamplates = [
        1 =>'blog.html.twig',
        2 =>'blog-single.html.twig',
    ];

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $urlKey;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $locale;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $templateId;

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
    protected $post_short_text;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $post_text;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $post_title;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $h1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $h2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $h3;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $h4;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $h5;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $h6;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $singleImage;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tags;


    /**
     * @return mixed
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
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
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
    public function getPostShortText()
    {
        return $this->post_short_text;
    }

    /**
     * @param mixed $post_short_text
     */
    public function setPostShortText($post_short_text)
    {
        $this->post_short_text = $post_short_text;
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
    public function getPostText()
    {
        return $this->post_text;
    }

    /**
     * @param mixed $post_title
     */
    public function setPostTitle($post_title)
    {
        $this->post_title = $post_title;
    }

    /**
     * @return mixed
     */
    public function getPostTitle()
    {
        return $this->post_title;
    }

    /**
     * @param mixed $post_text
     */
    public function setPostText($post_text)
    {
        $this->post_text = $post_text;
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
    public function getH2()
    {
        return $this->h2;
    }

    /**
     * @param mixed $h2
     */
    public function setH2($h2)
    {
        $this->h2 = $h2;
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

    /**
     * @return mixed
     */
    public function getH4()
    {
        return $this->h4;
    }

    /**
     * @param mixed $h4
     */
    public function setH4($h4)
    {
        $this->h4 = $h4;
    }

    /**
     * @return mixed
     */
    public function getH5()
    {
        return $this->h5;
    }

    /**
     * @param mixed $h5
     */
    public function setH5($h5)
    {
        $this->h5 = $h5;
    }

    /**
     * @return mixed
     */
    public function getH6()
    {
        return $this->h6;
    }

    /**
     * @param mixed $h6
     */
    public function setH6($h6)
    {
        $this->h6 = $h6;
    }

    /**
     * @return array
     */
    static public function getTemplates()
    {
        return self::$teamplates;
    }

    public function getTemplatePath(){
        $templateId = $this->getTemplateId();
        if ( isset (self::$teamplates[$templateId])){
            return self::$teamplates[$templateId];
        }
        return self::TEMPLATE_404;
    }

    /**
     * @return mixed
     */
    public function getSingleImage()
    {
        return $this->singleImage;
    }

    /**
     * @param mixed $singleImage
     */
    public function setSingleImage($singleImage)
    {
        $this->singleImage = $singleImage;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
}
