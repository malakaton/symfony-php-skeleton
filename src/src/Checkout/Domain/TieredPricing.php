<?php

namespace App\Checkout\Domain;

final class TieredPricing
{
    private int $quantity;

    private const PRICE_RANGE = [
        2 => 299,
        10 => 239,
        25 => 219,
        50 => 199
    ];

    public function __construct(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): int
    {
        foreach (self::PRICE_RANGE as $quantity => $price) {
            if ($this->quantity <= $quantity) {
                return $price;
            }
        }

        return 149;
    }

    public function calculate(): int
    {
        $price = 299;

        return $price * $this->quantity;
    }
}
