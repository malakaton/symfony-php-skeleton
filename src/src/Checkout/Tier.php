<?php

declare(strict_types=1);

namespace App\Checkout;

final class Tier
{
    private int $from;
    private int $to;
    private int $price;

    public function __construct(int $from, int $to, int $price)
    {
        $this->from = $from;
        $this->to = $to;
        $this->price = $price;
    }

    public function size(): int
    {
        return $this->to - $this->from + 1;
    }

    public function price(): int
    {
        return $this->price;
    }

    public function totalPrice(): int
    {
        return $this->size() * $this->price;
    }
}
