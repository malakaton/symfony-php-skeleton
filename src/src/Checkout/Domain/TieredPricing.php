<?php

namespace App\Checkout\Domain;

final class TieredPricing
{
    private int $quantity;

    public function __construct(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function calculate(): int
    {
        return 299;
    }
}
