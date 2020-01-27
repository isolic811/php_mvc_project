<?php

namespace App\Entity;

use App\Service\GeometryCalculator;

class Circle
{
    //always type circle
    private string $type = "circle";

    private float $radius;

    private float $surface;

    private float $circumference;

    /**
     * Triangle constructor.
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;

        $this->setSurface($radius);
        $this->setCircumference($radius);
    }


    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    /**
     * @param float $radius
     */
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function setSurface(float $radius): self
    {
        $this->surface =GeometryCalculator::calculateCircleSurface($radius);
        return $this;
    }

    public function getCircumference(): ?float
    {
        return $this->circumference;
    }

    public function setCircumference(float $radius): self
    {
        $this->circumference= GeometryCalculator::calculateCircleCircumference($radius);
        return $this;
    }
}
