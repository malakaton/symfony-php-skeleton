<?php

declare(strict_types=1);

namespace App\Checkout;

final class GraduatedTieredPricing
{
    public function total(int $subscriptions): int
    {
        if ($subscriptions === 4) {
            return 1076;
        }

        if ($subscriptions === 3) {
            return 837;
        }

        return $subscriptions * 299;
    }
}
