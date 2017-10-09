<?php

namespace HTL3R\IceCream;

/**
 * Class IceLasagne
 * Class representing a single IceLasagne with specific properties
 */
class IceLasagne extends Ice implements IceInterface
{
    private $width;
    private $height;
    private $depth;

    /**
     * IceCup constructor.
     * @param string $name
     * @param string $topping
     * @param int $width
     * @param int $height
     * @param int $depth
     */
    public function __construct(
        string $name,
        string $topping,
        int $width,
        int $height,
        int $depth
    ) {
        parent::__construct($name, $topping);
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    /**
     * @return float Volume of the IceCup
     */
    public function getVolume(): float
    {
        return $this->width*$this->depth*$this->height;
    }
}
