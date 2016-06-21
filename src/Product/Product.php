<?php

namespace Develop\Business\Product;

class Product
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $unitPrice;
    /**
     * @var int
     */
    private $stock;

    /**
     * Product constructor.
     * @param string $name
     * @param float $unitPrice
     * @param int $stock
     * @param int|null $id
     */
    public function __construct($name, $unitPrice, $stock, $id = null)
    {
        $this->name = (string) $name;
        $this->unitPrice = (float) $unitPrice;
        $this->stock = (int) $stock;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }
}