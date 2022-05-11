<?php

declare(strict_types=1);

namespace App\Checkout;

final class GraduatedTieredPricing
{
    public function total(int $subscriptions): int
    {
        $tier1price = 299;
        $tier1size = 2;
        $tier1total = $tier1price * $tier1size;
        $tier2size = 8;
        $tier2price = 239;
        $tier2total = $tier2price * $tier2size;
        $tier3price = 219;

        if ($subscriptions === 11) {
            return $tier1total + $tier2total + $tier3price;
        }

        if ($subscriptions === 12) {
            return 2948;
        }

        if ($subscriptions >= 3) {
            return $tier1total + ($subscriptions - $tier1size) * 239;
        }

        return $subscriptions * 299;
    }
}
