<?php

// TODO refactoriser le code pour respecter le principe LSP de la programmation SOLID

interface Shape
{
    public function calculateArea();
}

class Rectangle implements Shape
{
    protected $height;
    protected $width; 
    
    public function setWidth($width)
    {
        $this->width = $width;
    }
    
    public function setHeight($height)
    {
        $this->height = $height;
    }
    
    public function getWidth()
    {
        return $this->width;
    }
    
    public function getHeight()
    {
        return $this->height;
    }
    
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
}

class Square implements Shape
{
    protected $side;

	public function setSide($side)
    {
        $this->side = $side;
    }

    public function getSide()
    {
        return $this->side;
    }

    public function calculateArea()
    {
        return $this->side * $this->side;
    }
}

class GraphicEditor
{
    public function resize(Shape $shape)
    {
        if ($shape instanceof Rectangle) {
            $shape->setHeight($shape->getHeight() * 2);
            $shape->setWidth($shape->getWidth() * 4);
        } elseif ($shape instanceof Square) {
            $shape->setSide($shape->getSide() * 2);
        }
    }
}