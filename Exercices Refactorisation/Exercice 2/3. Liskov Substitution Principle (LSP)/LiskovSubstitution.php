<?php

namespace LSPViolation;

interface Shape
{
    public function getArea();
}

class Rectangle implements Shape
{
    /** @var  integer */
    protected $width;
    /** @var  integer */
    protected $height;

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->height * $this->width;
    }
}

class Square implements Shape
{
    /** @var  integer */
    private $side;

    /**
     * @param $side
     */
    public function setSide($side)
    {
        $this->side = $side;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->side * $this->side;
    }
}

class TestLS
{
   /**
     * @return Shape
     */
    private static function getNewShape()
    {
        return new Square();
    }

    /**
     * main test
     */
    public static function test()
    {
        $shape = self::getNewShape();
        
        if ($shape instanceof Square) {
            $shape->setSide(5);
        } elseif ($shape instanceof Rectangle) {
            $shape->setHeight(5);
            $shape->setWidth(10);
        }

        echo $shape->getArea();
    }
}

TestLS::test();