<?php

namespace App\Checkout\Domain;

final class TieredPricing
{
    private int $quantity;

    private const PRICE_RANGE = [

    ];

    public function __construct(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): int
    {
        return 299;
    }

    public function calculate(): int
    {
        $price = 299;

        return $price * $this->quantity;
    }
}
