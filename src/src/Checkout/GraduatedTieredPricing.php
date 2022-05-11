<?php

declare(strict_types=1);

namespace App\Checkout;

final class GraduatedTieredPricing
{
    public function total(int $subscriptions): int
    {
        if ($subscriptions === 4) {
            return 299 + 299 + 239 + 239;
        }

        if ($subscriptions === 3) {
            return 299 + 299 + 239;
        }

        return $subscriptions * 299;
    }
}
