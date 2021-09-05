<?php


class Calculator
{
    public function calculateArea($shapes): int
    {
        $area = 0;

        foreach ($shapes as $shape) {
            if ($shape instanceof Shape)
                $area += $shape->getArea();
        }
        return $area;
    }
}
