<?php

namespace HTL3R\IceCream;

/**
 * Class IceCup
 * Class representing a single IceCup with specific properties
 */
class IceCup extends Ice implements IceInterface
{
    private $radius;
    private $height;

    /**
     * IceCup constructor.
     * @param string $name
     * @param string $topping
     * @param int $radius
     * @param int $height
     */
    public function __construct(
        string $name,
        string $topping,
        int $radius,
        int $height
    ) {
        parent::__construct($name, $topping);
        $this->radius = $radius;
        $this->height = $height;
    }

    /**
     * @return float Volume of the IceCup
     */
    public function getVolume(): float
    {
// (Pi*r²)*Höhe
        return Round((pi() * pow($this->radius, 2)) * $this->height, 2);
    }
}
