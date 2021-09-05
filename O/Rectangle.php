<?php

class Rectangle implements Shape
{

    private $length;
    private $height;

    public function __construct($length, $height)
    {
        $this->height = $height;
        $this->length = $length;
    }

    public function getArea()
    {
        return ($this->length * $this->height);
    }

}
