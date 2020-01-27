<?php


namespace App\Service;


class GeometryCalculator
{
    public static function calculateCircleCircumference(float $radius): float
    {
        //calculate circumference from radius
        $circumference = 2*$radius*3.14;

        return $circumference;
    }

    public static function calculateCircleSurface(float $radius): float
    {
        //calculate surface from radius
        $surface =$radius*$radius*3.14;

        return $surface;
    }

    public static function calculateTriangleCircumference(float $a, float $b, float $c): float
    {
        //calculate circumference from triangle anices
        $circumference = ($a+$b+$c);

        return $circumference;
    }

    public static function calculateTriangleSurface(float $a, float $b, float $c): float
    {
        //calculate surface from triangle anices
        $surface =1/4*sqrt(($a+$b+$c)*(-$a+$b+$c)*($a-$b+$c)*($a+$b-$c));

        return $surface;
    }

    public function getSumOfTwonumbers(float $numberOne, float $numberTwo): float
    {
        return $numberOne+$numberTwo;
    }


}