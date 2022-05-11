<?php

declare(strict_types=1);

namespace App\Checkout;

use App\Checkout\VO\SubscriptionsBeingPurchased;

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

    public function to(): int
    {
        return $this->to;
    }

    public function from(): int
    {
        return $this->from;
    }

    public function price(): int
    {
        return $this->price;
    }

    public function totalPrice(SubscriptionsBeingPurchased $subscriptions): int
    {
        if ($subscriptions->coversSubscriptions($this)) {
            return $this->tierPrice();
        }

        if ($subscriptions->calculatedAllSubscriptions($this)) {
            return 0;
        }

        return $subscriptions->numberSubscriptions($this) * $this->price;
    }

    private function tierPrice(): int
    {
        return $this->size() * $this->price;
    }
}
