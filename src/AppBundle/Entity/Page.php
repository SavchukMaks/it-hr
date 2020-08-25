<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pages")
 */
class Page
{
    const TEMPLATE_404 = 'page-404.html.twig';


    static protected $teamplates = [
        1=>'index.html.twig',
        2=>'home-business.html.twig',
        3=>'vacancy-single.html.twig',
        4=>'vacancy.html.twig',
        5=>'page-about.html.twig',
        6=>'page-about-creative.html.twig',
        7=>'page-careers.html.twig',
        8=>'page-contact.html.twig',
        9=>'page-services.html.twig',
        10=>'blog.html.twig',
        11=>'blog-single.html.twig'
    ];

    /**
     * @ORM\Column(type="integer")
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
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block6;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block7;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block8;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block9;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block10;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block11;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block12;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block13;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block14;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block15;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block16;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block17;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block18;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block19;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block20;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block21;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block22;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block23;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block24;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block25;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block26;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block27;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block28;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block29;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block30;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block31;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block32;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block33;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block34;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block35;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block36;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block37;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block38;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block39;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block40;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block41;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block42;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block43;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block44;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $block45;



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
    public function getBlock1()
    {
        return $this->block1;
    }

    /**
     * @param mixed $block1
     */
    public function setBlock1($block1)
    {
        $this->block1 = $block1;
    }

    /**
     * @return mixed
     */
    public function getBlock2()
    {
        return $this->block2;
    }

    /**
     * @param mixed $block2
     */
    public function setBlock2($block2)
    {
        $this->block2 = $block2;
    }

    /**
     * @return mixed
     */
    public function getBlock3()
    {
        return $this->block3;
    }

    /**
     * @param mixed $block3
     */
    public function setBlock3($block3)
    {
        $this->block3 = $block3;
    }

    /**
     * @return mixed
     */
    public function getBlock4()
    {
        return $this->block4;
    }

    /**
     * @param mixed $block4
     */
    public function setBlock4($block4)
    {
        $this->block4 = $block4;
    }

    /**
     * @return mixed
     */
    public function getBlock5()
    {
        return $this->block5;
    }

    /**
     * @param mixed $block5
     */
    public function setBlock5($block5)
    {
        $this->block5 = $block5;
    }


    /**
     * @return mixed
     */
    public function getBlock6()
    {
        return $this->block6;
    }

    /**
     * @param mixed $block6
     */
    public function setBlock6($block6)
    {
        $this->block6 = $block6;
    }

    /**
     * @return mixed
     */
    public function getBlock7()
    {
        return $this->block7;
    }

    /**
     * @param mixed $block7
     */
    public function setBlock7($block7)
    {
        $this->block7 = $block7;
    }

    /**
     * @return mixed
     */
    public function getBlock8()
    {
        return $this->block8;
    }

    /**
     * @param mixed $block8
     */
    public function setBlock8($block8)
    {
        $this->block8 = $block8;
    }

    /**
     * @return mixed
     */
    public function getBlock9()
    {
        return $this->block9;
    }

    /**
     * @param mixed $block9
     */
    public function setBlock9($block9)
    {
        $this->block9 = $block9;
    }

    /**
     * @return mixed
     */
    public function getBlock10()
    {
        return $this->block10;
    }

    /**
     * @param mixed $block10
     */
    public function setBlock10($block10)
    {
        $this->block10 = $block10;
    }

    /**
     * @return mixed
     */
    public function getBlock11()
    {
        return $this->block11;
    }

    /**
     * @param mixed $block11
     */
    public function setBlock11($block11)
    {
        $this->block11 = $block11;
    }

    /**
     * @return mixed
     */
    public function getBlock12()
    {
        return $this->block12;
    }

    /**
     * @param mixed $block12
     */
    public function setBlock12($block12)
    {
        $this->block12 = $block12;
    }

    /**
     * @return mixed
     */
    public function getBlock13()
    {
        return $this->block13;
    }

    /**
     * @param mixed $block13
     */
    public function setBlock13($block13)
    {
        $this->block13 = $block13;
    }

    /**
     * @return mixed
     */
    public function getBlock14()
    {
        return $this->block14;
    }

    /**
     * @param mixed $block14
     */
    public function setBlock14($block14)
    {
        $this->block14 = $block14;
    }

    /**
     * @return mixed
     */
    public function getBlock15()
    {
        return $this->block15;
    }

    /**
     * @param mixed $block15
     */
    public function setBlock15($block15)
    {
        $this->block15 = $block15;
    }

    /**
     * @return mixed
     */
    public function getBlock16()
    {
        return $this->block16;
    }

    /**
     * @param mixed $block16
     */
    public function setBlock16($block16)
    {
        $this->block16 = $block16;
    }

    /**
     * @return mixed
     */
    public function getBlock17()
    {
        return $this->block17;
    }

    /**
     * @param mixed $block17
     */
    public function setBlock17($block17)
    {
        $this->block17 = $block17;
    }

    /**
     * @return mixed
     */
    public function getBlock18()
    {
        return $this->block18;
    }

    /**
     * @param mixed $block18
     */
    public function setBlock18($block18)
    {
        $this->block18 = $block18;
    }

    /**
     * @return mixed
     */
    public function getBlock19()
    {
        return $this->block19;
    }

    /**
     * @param mixed $block19
     */
    public function setBlock19($block19)
    {
        $this->block19 = $block19;
    }

    /**
     * @return mixed
     */
    public function getBlock20()
    {
        return $this->block20;
    }

    /**
     * @param mixed $block20
     */
    public function setBlock20($block20)
    {
        $this->block20 = $block20;
    }

    /**
     * @return mixed
     */
    public function getBlock21()
    {
        return $this->block21;
    }

    /**
     * @param mixed $block21
     */
    public function setBlock21($block21)
    {
        $this->block21 = $block21;
    }

    /**
     * @return mixed
     */
    public function getBlock22()
    {
        return $this->block22;
    }

    /**
     * @param mixed $block22
     */
    public function setBlock22($block22)
    {
        $this->block22 = $block22;
    }

    /**
     * @return mixed
     */
    public function getBlock23()
    {
        return $this->block23;
    }

    /**
     * @param mixed $block23
     */
    public function setBlock23($block23)
    {
        $this->block23 = $block23;
    }

    /**
     * @return mixed
     */
    public function getBlock24()
    {
        return $this->block24;
    }

    /**
     * @param mixed $block24
     */
    public function setBlock24($block24)
    {
        $this->block24 = $block24;
    }

    /**
     * @return mixed
     */
    public function getBlock25()
    {
        return $this->block25;
    }

    /**
     * @param mixed $block25
     */
    public function setBlock25($block25)
    {
        $this->block25 = $block25;
    }

    /**
     * @return mixed
     */
    public function getBlock26()
    {
        return $this->block26;
    }

    /**
     * @param mixed $block26
     */
    public function setBlock26($block26)
    {
        $this->block26 = $block26;
    }

    /**
     * @return mixed
     */
    public function getBlock27()
    {
        return $this->block27;
    }

    /**
     * @param mixed $block27
     */
    public function setBlock27($block27)
    {
        $this->block27 = $block27;
    }

    /**
     * @return mixed
     */
    public function getBlock28()
    {
        return $this->block28;
    }

    /**
     * @param mixed $block28
     */
    public function setBlock28($block28)
    {
        $this->block28 = $block28;
    }

    /**
     * @return mixed
     */
    public function getBlock29()
    {
        return $this->block29;
    }

    /**
     * @param mixed $block29
     */
    public function setBlock29($block29)
    {
        $this->block29 = $block29;
    }

    /**
     * @return mixed
     */
    public function getBlock30()
    {
        return $this->block30;
    }

    /**
     * @param mixed $block30
     */
    public function setBlock30($block30)
    {
        $this->block30 = $block30;
    }

    /**
     * @return mixed
     */
    public function getBlock31()
    {
        return $this->block31;
    }

    /**
     * @param mixed $block31
     */
    public function setBlock31($block31)
    {
        $this->block31 = $block31;
    }

    /**
     * @return mixed
     */
    public function getBlock32()
    {
        return $this->block32;
    }

    /**
     * @param mixed $block32
     */
    public function setBlock32($block32)
    {
        $this->block32 = $block32;
    }

    /**
     * @return mixed
     */
    public function getBlock33()
    {
        return $this->block33;
    }

    /**
     * @param mixed $block33
     */
    public function setBlock33($block33)
    {
        $this->block33 = $block33;
    }

    /**
     * @return mixed
     */
    public function getBlock34()
    {
        return $this->block34;
    }

    /**
     * @param mixed $block34
     */
    public function setBlock34($block34)
    {
        $this->block34 = $block34;
    }

    /**
     * @return mixed
     */
    public function getBlock35()
    {
        return $this->block35;
    }

    /**
     * @param mixed $block35
     */
    public function setBlock35($block35)
    {
        $this->block35 = $block35;
    }

    /**
     * @return mixed
     */
    public function getBlock36()
    {
        return $this->block36;
    }

    /**
     * @param mixed $block36
     */
    public function setBlock36($block36)
    {
        $this->block36 = $block36;
    }

    /**
     * @return mixed
     */
    public function getBlock37()
    {
        return $this->block37;
    }

    /**
     * @param mixed $block37
     */
    public function setBlock37($block37)
    {
        $this->block37 = $block37;
    }

    /**
     * @return mixed
     */
    public function getBlock38()
    {
        return $this->block38;
    }

    /**
     * @param mixed $block38
     */
    public function setBlock38($block38)
    {
        $this->block38 = $block38;
    }

    /**
     * @return mixed
     */
    public function getBlock39()
    {
        return $this->block39;
    }

    /**
     * @param mixed $block39
     */
    public function setBlock39($block39)
    {
        $this->block39 = $block39;
    }

    /**
     * @return mixed
     */
    public function getBlock40()
    {
        return $this->block40;
    }

    /**
     * @param mixed $block40
     */
    public function setBlock40($block40)
    {
        $this->block40 = $block40;
    }

    /**
     * @return mixed
     */
    public function getBlock41()
    {
        return $this->block41;
    }

    /**
     * @param mixed $block41
     */
    public function setBlock41($block41)
    {
        $this->block41 = $block41;
    }

    /**
     * @return mixed
     */
    public function getBlock42()
    {
        return $this->block42;
    }

    /**
     * @param mixed $block42
     */
    public function setBlock42($block42)
    {
        $this->block42 = $block42;
    }

    /**
     * @return mixed
     */
    public function getBlock43()
    {
        return $this->block43;
    }

    /**
     * @param mixed $block43
     */
    public function setBlock43($block43)
    {
        $this->block43 = $block43;
    }

    /**
     * @return mixed
     */
    public function getBlock44()
    {
        return $this->block44;
    }

    /**
     * @param mixed $block44
     */
    public function setBlock44($block44)
    {
        $this->block44 = $block44;
    }

    /**
     * @return mixed
     */
    public function getBlock45()
    {
        return $this->block45;
    }

    /**
     * @param mixed $block45
     */
    public function setBlock45($block45)
    {
        $this->block45 = $block45;
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

}
