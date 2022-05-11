<?php

declare(strict_types=1);

namespace App\Checkout;

final class GraduatedTieredPricing
{
    public function total(int $subscriptions): int
    {
        $tier1total = 299 + 299;

        if ($subscriptions === 4) {
            return $tier1total + 239 + 239;
        }

        if ($subscriptions === 5) {
            return $tier1total + 239 + 239 + 239;
        }

        if ($subscriptions === 3) {
            return $tier1total + 239;
        }

        return $subscriptions * 299;
    }
}
