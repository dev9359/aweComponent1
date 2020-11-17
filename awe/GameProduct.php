<?php


namespace awe;


class GameProduct extends ShopProduct
{
    private $PEGI;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $PEGI
    )
    {
        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->PEGI = $PEGI;
    }

    public function getPEGI()
    {
        return $this->PEGI;
    }
}