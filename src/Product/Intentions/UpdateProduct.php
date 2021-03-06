<?php

namespace Develop\Business\Product\Intentions;

class UpdateProduct extends AddProduct implements IdentifiedIntention
{
    private $id;

    /**
     * UpdateProduct constructor.
     * @param $id
     * @param $name
     * @param $unitPrice
     * @param int $stock
     */
    public function __construct($id, $name, $unitPrice, $stock)
    {
        $this->id = $id;
        parent::__construct($name, $unitPrice, $stock);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
