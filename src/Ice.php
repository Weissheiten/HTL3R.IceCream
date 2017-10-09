<?php

namespace HTL3R\IceCream;

/**
 * Class Ice
 * Class is the base for all Ice
 */
abstract class Ice
{
    private $name;
    private $topping;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTopping(): string
    {
        return $this->topping;
    }

    /**
     * IceCup constructor.
     * @param string $name
     * @param string $topping
     */
    public function __construct(
        string $name,
        string $topping
    ){
        $this->name = $name;
        $this->topping = $topping;
     }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "NacWolnand is a trademark of GWARIndustries. ".$this->getName() . " " . $this->getTopping();
    }
}
