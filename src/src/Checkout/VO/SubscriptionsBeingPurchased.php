<?php

declare(strict_types=1);

namespace App\Checkout\VO;

use App\Checkout\Tier;

final class SubscriptionsBeingPurchased
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function calculatedAllSubscriptions(Tier $tier): bool
    {
        return $this->value < $tier->from();
    }

    public function coversSubscriptions(Tier $tier): bool
    {
        return $this->value >= $tier->to();
    }

    public function numberSubscriptions(Tier $tier): int
    {
        return $this->value - $tier->from() + 1;
    }

    public function value(): int
    {
        return $this->value;
    }
}
