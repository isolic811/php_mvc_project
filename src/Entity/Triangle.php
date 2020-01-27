<?php

namespace App\Entity;

use App\Service\GeometryCalculator;

class Triangle
{
    //always type triangle
    private string $type = "triangle";

    private float $a;

    private float $b;

    private float $c;

    private float $surface;

    private float $circumference;

    /**
     * Triangle constructor.
     * @param float $a
     * @param float $b
     * @param float $c
     */
    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        //automatic calculations from arguments
        $this->setSurface($a, $b, $c);
        $this->setCircumference($a, $b, $c);
    }


    public function getType(): ?string
    {
        return $this->type;
    }

    public function getA(): ?float
    {
        return $this->a;
    }

    public function setA(float $a): self
    {
        $this->a = $a;

        return $this;
    }

    public function getB(): ?float
    {
        return $this->b;
    }

    public function setB(float $b): self
    {
        $this->b = $b;

        return $this;
    }

    public function getC(): ?float
    {
        return $this->c;
    }

    public function setC(float $c): self
    {
        $this->c = $c;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $a, float $b, float $c): self
    {
        $this->surface = GeometryCalculator::calculateTriangleSurface($a,$b,$c);

        return $this;
    }

    public function getCircumference(): ?float
    {
        return $this->circumference;
    }

    public function setCircumference(float $a, float $b, float $c): self
    {
        $this->circumference = GeometryCalculator::calculateTriangleCircumference($a,$b,$c);

        return $this;
    }
}
