<?php

declare(strict_types=1);

namespace App\Checkout\VO;

final class SubscriptionsBeingPurchased
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}
