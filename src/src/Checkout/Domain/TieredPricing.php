<?php

namespace App\Checkout\Domain;

final class TieredPricing
{
    private int $quantity;

    public function __construct(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): int
    {
        $quantity = 1;

        if ($quantity <= 2) {
            return 299;
        }

        if ($quantity <= 10) {
            return 239;
        }

        if ($quantity <= 25) {
            return 219;
        }

        if ($quantity <= 50) {
            return 199;
        }

        return 149;
    }

    public function calculate(): int
    {
        $price = 299;

        return $price * $this->quantity;
    }
}
